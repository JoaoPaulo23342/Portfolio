<?php
// ========== CARREGAR CONFIGURAÇÕES ==========
require_once 'config_email.php';

// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitizar e validar dados do formulário
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $assunto = isset($_POST['assunto']) ? trim($_POST['assunto']) : '';
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';
    
    // Array para armazenar erros
    $erros = array();
    
    // Validações
    if (empty($nome)) {
        $erros[] = "Nome é obrigatório";
    }
    
    if (empty($email)) {
        $erros[] = "Email é obrigatório";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email inválido";
    }
    
    if (empty($assunto)) {
        $erros[] = "Assunto é obrigatório";
    }
    
    if (empty($mensagem)) {
        $erros[] = "Mensagem é obrigatória";
    }
    
    // Se não há erros, processar o envio
    if (empty($erros)) {
        
        // Preparar o assunto do email
        $assunto_email = "[Portfolio João Paulo] " . $assunto;
        
        // Preparar o corpo do email
        $corpo_email = "
        <html>
        <head>
            <title>Nova mensagem do portfolio</title>
        </head>
        <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                <h2 style='color: #0ea5e9;'>Nova Mensagem do Portfolio</h2>
                
                <p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Assunto:</strong> " . htmlspecialchars($assunto) . "</p>
                <p><strong>Mensagem:</strong></p>
                <div style='background: #f9f9f9; padding: 15px; border-left: 4px solid #0ea5e9;'>
                    " . nl2br(htmlspecialchars($mensagem)) . "
                </div>
                
                <hr style='margin: 20px 0;'>
                <p style='font-size: 12px; color: #666;'>
                    <strong>Data/Hora:</strong> " . date('d/m/Y H:i:s') . "<br>
                    <strong>IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "
                </p>
            </div>
        </body>
        </html>";
        
        // Salvar mensagem em arquivo (alternativa para InfinityFree)
        $email_enviado = false;
        $debug_info = "";
        
        try {
            // Criar nome do arquivo com timestamp
            $timestamp = date('Y-m-d_H-i-s');
            $filename = "mensagens/mensagem_" . $timestamp . ".txt";
            
            // Criar diretório se não existir
            if (!file_exists('mensagens')) {
                mkdir('mensagens', 0755, true);
                $debug_info .= "Diretório criado | ";
            }
            
            // Preparar conteúdo da mensagem
            $conteudo = "=== NOVA MENSAGEM DO PORTFOLIO ===\n";
            $conteudo .= "Data/Hora: " . date('d/m/Y H:i:s') . "\n";
            $conteudo .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
            $conteudo .= "Nome: " . $nome . "\n";
            $conteudo .= "Email: " . $email . "\n";
            $conteudo .= "Assunto: " . $assunto . "\n";
            $conteudo .= "Mensagem:\n" . $mensagem . "\n";
            $conteudo .= "=====================================\n\n";
            
            // Salvar no arquivo
            if (file_put_contents($filename, $conteudo)) {
                $debug_info .= "Arquivo salvo: " . $filename . " | ";
                
                // Email será enviado via JavaScript (SMTPjs)
                $debug_info .= "Email será enviado via JavaScript";
                
                $email_enviado = true; // Sucesso se arquivo foi salvo
            } else {
                $debug_info .= "Erro ao salvar arquivo";
                $email_enviado = false;
            }
            
        } catch (Exception $e) {
            $debug_info = "Exceção: " . $e->getMessage();
            $email_enviado = false;
        }
        
        if ($email_enviado) {
            // Sucesso
            $mensagem_sucesso = urlencode("Mensagem recebida com sucesso! Entrarei em contato em breve.");
            header("Location: index.php#contato?status=sucesso&msg=" . $mensagem_sucesso);
            exit();
        } else {
            // Erro no envio
            $mensagem_erro = urlencode("Erro ao processar mensagem. Debug: " . $debug_info . ". Tente novamente.");
            header("Location: index.php#contato?status=erro&msg=" . $mensagem_erro);
            exit();
        }
        
    } else {
        // Há erros de validação
        $mensagem_erro = urlencode("Erro: " . implode(", ", $erros));
        header("Location: index.php#contato?status=erro&msg=" . $mensagem_erro);
        exit();
    }
    
} else {
    // Acesso direto ao arquivo - redirecionar para a página inicial
    header("Location: index.php");
    exit();
}
?>