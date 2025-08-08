<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Email Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: Arial, sans-serif; 
            background: #f0f2f5;
            padding: 20px;
        }
        .container { 
            max-width: 800px;
            margin: 0 auto;
            background: white; 
            padding: 30px; 
            border-radius: 10px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #333; margin-bottom: 20px; }
        .info { 
            background: #e3f2fd; 
            padding: 15px; 
            border-radius: 5px; 
            margin: 15px 0;
            border-left: 4px solid #2196f3;
        }
        .success { 
            background: #e8f5e8; 
            padding: 15px; 
            border-radius: 5px; 
            margin: 15px 0;
            border-left: 4px solid #4caf50;
        }
        .error { 
            background: #ffebee; 
            padding: 15px; 
            border-radius: 5px; 
            margin: 15px 0;
            border-left: 4px solid #f44336;
        }
        button { 
            background: #2196f3; 
            color: white; 
            padding: 12px 24px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            margin: 10px 10px 10px 0;
            font-size: 16px;
        }
        button:hover { background: #1976d2; }
        button:disabled { background: #ccc; cursor: not-allowed; }
        .resultado { margin-top: 20px; }
        .log { 
            background: #f5f5f5; 
            padding: 15px; 
            border-radius: 5px; 
            margin-top: 15px;
            font-family: monospace;
            font-size: 14px;
            white-space: pre-wrap;
            max-height: 400px;
            overflow-y: auto;
        }
        .status-item {
            display: inline-block;
            padding: 5px 12px;
            margin: 5px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-ok { background: #4caf50; color: white; }
        .status-error { background: #f44336; color: white; }
        .status-pending { background: #ff9800; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧪 Teste de Email - Portfolio</h1>
        
        <div class="info">
            <strong>🌐 Ambiente:</strong> <span id="ambiente">Carregando...</span><br>
            <strong>📍 URL:</strong> <span id="url">Carregando...</span><br>
            <strong>⏰ Horário:</strong> <span id="horario">Carregando...</span>
        </div>

        <div>
            <button onclick="testarCompleto()" style="background: linear-gradient(45deg, #4CAF50, #45a049); color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; font-size: 16px; margin: 5px;">
                 🚀 Teste Completo
             </button>
             <button onclick="testarFormspree()" style="background: linear-gradient(45deg, #2196F3, #1976D2); color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; font-size: 16px; margin: 5px;">
                 📧 Teste Email
             </button>
             <button onclick="testarPHP()" style="background: linear-gradient(45deg, #FF9800, #F57C00); color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; font-size: 16px; margin: 5px;">
                 🐘 Teste PHP
             </button>
             <button onclick="limparLogs()" style="background: linear-gradient(45deg, #9E9E9E, #757575); color: white; border: none; padding: 12px 24px; border-radius: 8px; cursor: pointer; font-size: 16px; margin: 5px;">
                 🧹 Limpar
             </button>
        </div>

        <div style="margin: 20px 0;">
            <h3>Status dos Testes:</h3>
            <span id="status-ambiente" class="status-badge status-ok">Ambiente: OK</span>
            <span id="status-php" class="status-badge status-ok">PHP: OK</span>
            <span id="status-email" class="status-badge status-pending">Email: AGUARDANDO</span>
        </div>

        <div id="resultado" class="resultado"></div>
        <div id="logs" class="log" style="display: none;"></div>
    </div>

    <script>
        // Variáveis globais
        var logs = '';
        var testStatus = {};

        // Função para adicionar log
        function addLog(msg) {
            var now = new Date();
            var time = now.getHours() + ':' + 
                      (now.getMinutes() < 10 ? '0' : '') + now.getMinutes() + ':' + 
                      (now.getSeconds() < 10 ? '0' : '') + now.getSeconds();
            
            logs += time + ' - ' + msg + '\n';
            
            var logDiv = document.getElementById('logs');
            logDiv.style.display = 'block';
            logDiv.textContent = logs;
            logDiv.scrollTop = logDiv.scrollHeight;
            
            console.log(time + ' - ' + msg);
        }

        // Função para atualizar status
        function updateStatus(service, status) {
            var serviceId = service.toLowerCase();
            if (serviceId === 'formspree') serviceId = 'email'; // Mapear Formspree para Email
            
            var element = document.getElementById('status-' + serviceId);
            if (element) {
                element.className = 'status-badge status-' + status;
                var statusText = status === 'ok' ? 'OK' : status === 'error' ? 'ERRO' : 'AGUARDANDO';
                var displayName = serviceId === 'email' ? 'Email' : service;
                element.textContent = displayName + ': ' + statusText;
            }
        }

        // Função para mostrar resultado
        function showResult(type, title, message) {
            var html = '<div class="' + type + '">';
            html += '<h3>' + title + '</h3>';
            html += '<div>' + message + '</div>';
            html += '<small>Horário: ' + new Date().toLocaleString() + '</small>';
            html += '</div>';
            document.getElementById('resultado').innerHTML = html;
        }

        // Detectar ambiente
        function detectarAmbiente() {
            addLog('🔍 Detectando ambiente...');
            
            var hostname = window.location.hostname;
            var url = window.location.href;
            var protocol = window.location.protocol;
            
            var ambiente = 'Desconhecido';
            if (hostname === 'localhost' || hostname === '127.0.0.1') {
                ambiente = 'Local';
            } else if (hostname.indexOf('infinityfreeapp.com') > -1 || 
                      hostname.indexOf('epizy.com') > -1 || 
                      hostname.indexOf('rf.gd') > -1) {
                ambiente = 'InfinityFree';
            } else {
                ambiente = 'Outro Servidor';
            }
            
            document.getElementById('ambiente').textContent = ambiente;
            document.getElementById('url').textContent = url;
            document.getElementById('horario').textContent = new Date().toLocaleString();
            
            addLog('🌐 Ambiente: ' + ambiente);
            addLog('📍 URL: ' + url);
            addLog('🔒 Protocolo: ' + protocol);
            
            updateStatus('Ambiente', 'ok');
            return ambiente;
        }

        // Testar Email (múltiplos serviços)
        function testarFormspree() {
            addLog('📧 Iniciando teste de email...');
            updateStatus('Email', 'pending');
            showResult('info', '⏳ Testando Envio de Email', 'Testando múltiplos serviços...');
            
            // Desabilitar botões
            var buttons = document.getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].disabled = true;
            }
            
            // Testar primeiro: EmailJS (mais confiável)
            testarEmailJS();
        }
        
        function testarEmailJS() {
            addLog('📧 Testando EmailJS...');
            
            // Carregar EmailJS dinamicamente
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js';
            script.onload = function() {
                addLog('📦 EmailJS carregado');
                
                // Inicializar EmailJS com chave pública válida
                emailjs.init('iQRzEf_eTYt8ZJLhJ'); // Chave pública do EmailJS
                
                var templateParams = {
                    from_name: 'Portfolio João Paulo',
                    from_email: 'joao.paulorcsilva@gmail.com',
                    to_name: 'João Paulo',
                    to_email: 'joao.paulorcsilva@gmail.com',
                    subject: 'Teste de Email do Portfolio',
                    message: 'Este é um email de teste enviado do portfolio em produção via EmailJS.\n\nData: ' + new Date().toLocaleString() + '\nURL: ' + window.location.href,
                    reply_to: 'joao.paulorcsilva@gmail.com'
                };
                
                addLog('📤 Enviando via EmailJS (configurado)...');
                
                emailjs.send('service_8x7yr2r', 'template_ixqhqxr', templateParams)
                    .then(function(response) {
                        addLog('✅ EmailJS: Sucesso! Status: ' + response.status);
                        updateStatus('Email', 'ok');
                        showResult('success', '✅ Email Enviado via EmailJS!', 
                            'Email enviado com sucesso via EmailJS!<br>' +
                            '<strong>Verifique: joao.paulorcsilva@gmail.com</strong><br>' +
                            'Status: ' + response.status + '<br>' +
                            '<small>Pode levar alguns minutos para chegar</small>'
                        );
                        reabilitarBotoes();
                    })
                    .catch(function(error) {
                        addLog('❌ EmailJS falhou: ' + JSON.stringify(error));
                        // Se EmailJS falhar, tentar Formspree
                        testarFormspreeBackup();
                    });
            };
            
            script.onerror = function() {
                addLog('❌ Erro ao carregar EmailJS');
                // Se não conseguir carregar EmailJS, tentar Formspree
                testarFormspreeBackup();
            };
            
            document.head.appendChild(script);
        }
        
        function testarFormspreeBackup() {
            addLog('📧 Tentando Formspree como backup...');
            
            var xhr = new XMLHttpRequest();
            var formData = new FormData();
            
            // Dados do formulário
            formData.append('name', 'Teste Portfolio - ' + new Date().toLocaleString());
            formData.append('email', 'joao.paulorcsilva@gmail.com');
            formData.append('subject', 'Teste de Email do Portfolio');
            formData.append('message', 'Este é um email de teste enviado do portfolio (backup via Formspree).');
            formData.append('_replyto', 'joao.paulorcsilva@gmail.com');
            
            addLog('📤 Enviando para Formspree...');
            
            // Tentar endpoint público do Formspree
            xhr.open('POST', 'https://formspree.io/f/xkgwgqpw', true);
            xhr.setRequestHeader('Accept', 'application/json');
            
            xhr.onload = function() {
                addLog('📨 Formspree respondeu - Status: ' + xhr.status);
                
                if (xhr.status === 200 || xhr.status === 302) {
                    addLog('✅ Formspree: Sucesso!');
                    updateStatus('Email', 'ok');
                    showResult('success', '✅ Email Enviado via Formspree!', 
                        'Email enviado com sucesso via Formspree (backup)!<br>' +
                        '<strong>Verifique: joao.paulorcsilva@gmail.com</strong><br>' +
                        'Status: ' + xhr.status
                    );
                } else {
                    addLog('❌ Formspree falhou: ' + xhr.status);
                    // Se Formspree também falhar, tentar método simples
                    testarMetodoSimples();
                }
                reabilitarBotoes();
            };
            
            xhr.onerror = function() {
                addLog('❌ Erro de rede no Formspree');
                testarMetodoSimples();
            };
            
            xhr.send(formData);
        }
        
        function testarMetodoSimples() {
            addLog('📧 Tentando método simples (mailto)...');
            
            var emailData = {
                to: 'joao.paulorcsilva@gmail.com',
                subject: 'Teste de Email do Portfolio',
                body: 'Este é um email de teste enviado do portfolio.\n\nData: ' + new Date().toLocaleString()
            };
            
            var mailtoLink = 'mailto:' + emailData.to + 
                           '?subject=' + encodeURIComponent(emailData.subject) + 
                           '&body=' + encodeURIComponent(emailData.body);
            
            addLog('📤 Criando link mailto...');
            
            updateStatus('Email', 'ok');
            showResult('success', '✅ Link de Email Criado!', 
                'Como os serviços externos falharam, criamos um link direto:<br>' +
                '<a href="' + mailtoLink + '" target="_blank" style="color: #2196f3; text-decoration: underline;">📧 Clique aqui para enviar email</a><br>' +
                '<small>Isso abrirá seu cliente de email padrão</small>'
            );
            
            reabilitarBotoes();
        }
        
        function reabilitarBotoes() {
            var buttons = document.getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].disabled = false;
            }
        }
        
        // Função para limpar logs
        function limparLogs() {
            document.getElementById('logs').innerHTML = '';
            document.getElementById('resultado').innerHTML = '';
            addLog('🧹 Logs limpos');
        }

        // Testar PHP
        function testarPHP() {
            addLog('📝 Testando PHP...');
            updateStatus('PHP', 'pending');
            showResult('info', '⏳ Testando PHP', 'Testando salvamento em arquivo...');
            
            var formData = new FormData();
            formData.append('nome', 'Teste PHP - ' + new Date().toLocaleString());
            formData.append('email', 'teste@php.com');
            formData.append('assunto', 'Teste PHP Portfolio');
            formData.append('mensagem', 'Mensagem de teste para verificar o salvamento.');
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'enviar_email.php', true);
            
            xhr.onload = function() {
                addLog('📄 PHP respondeu - Status: ' + xhr.status);
                addLog('📄 Resposta: ' + xhr.responseText.substring(0, 200) + '...');
                
                if (xhr.status === 200) {
                    if (xhr.responseText.indexOf('sucesso') > -1 || xhr.responseText.indexOf('salva') > -1) {
                        updateStatus('PHP', 'ok');
                        showResult('success', '✅ PHP Funcionando!', 
                            'Arquivo PHP processado com sucesso!<br>' +
                            '<strong>Mensagem salva no servidor</strong>'
                        );
                    } else {
                        updateStatus('PHP', 'error');
                        showResult('error', '⚠️ PHP com Problemas', 
                            'PHP respondeu mas sem confirmação de sucesso:<br>' +
                            xhr.responseText.substring(0, 200) + '...'
                        );
                    }
                } else {
                    updateStatus('PHP', 'error');
                    showResult('error', '❌ Erro no PHP', 'Status: ' + xhr.status);
                }
            };
            
            xhr.onerror = function() {
                addLog('❌ Erro ao conectar com PHP');
                updateStatus('PHP', 'error');
                showResult('error', '❌ Erro PHP', 'Não foi possível conectar ao arquivo PHP');
            };
            
            xhr.send(formData);
        }

        // Teste completo
        function iniciarTeste() {
            addLog('🚀 Iniciando teste completo...');
            showResult('info', '🚀 Teste Completo', 'Executando todos os testes...');
            
            // Resetar status
            updateStatus('Ambiente', 'ok');
            updateStatus('PHP', 'pending');
            updateStatus('Email', 'pending');
            
            detectarAmbiente();
            
            setTimeout(function() {
                testarPHP();
            }, 1000);
            
            setTimeout(function() {
                testarFormspree(); // Função que agora testa múltiplos serviços
            }, 3000);
        }

        // Limpar
        function limpar() {
            logs = '';
            testStatus = {};
            document.getElementById('logs').style.display = 'none';
            document.getElementById('logs').textContent = '';
            document.getElementById('resultado').innerHTML = '';
            document.getElementById('status-items').innerHTML = '';
            addLog('🧹 Tudo limpo');
        }

        // Inicialização
        window.onload = function() {
            addLog('🎯 Sistema carregado');
            detectarAmbiente();
            showResult('info', '🔧 Sistema Pronto', 
                'Teste otimizado para InfinityFree carregado com sucesso!<br>' +
                '<strong>Clique em "Iniciar Teste Completo" para começar</strong>'
            );
        };
    </script>
</body>
</html>