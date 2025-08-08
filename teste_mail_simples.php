<?php
// Teste simples da função mail() no InfinityFree

if (isset($_GET['testar'])) {
    $destinatario = 'joao.paulorcsilva@gmail.com';
    $assunto = 'Teste de Email - Portfolio';
    $mensagem = 'Este é um teste para verificar se o mail() funciona no InfinityFree.';
    
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=UTF-8";
    $headers[] = "From: Portfolio <noreply@" . $_SERVER['HTTP_HOST'] . ">";
    
    if (mail($destinatario, $assunto, $mensagem, implode("\r\n", $headers))) {
        echo "✅ Email enviado com sucesso!";
    } else {
        echo "❌ Falha ao enviar email.";
    }
} else {
    echo '<h2>Teste de Email</h2>';
    echo '<p><a href="?testar=1">Clique aqui para testar o envio de email</a></p>';
    echo '<p>Este teste verifica se a função mail() funciona no InfinityFree.</p>';
}
?>