<?php
// ========== CONFIGURAÇÃO DE EMAIL ==========
// Este arquivo contém as configurações de email do seu portfolio

// ========== CONFIGURAÇÕES BÁSICAS ==========
$config_email = array(
    'destinatario' => 'joao.paulorcsilva@gmail.com',
    'nome_site' => 'João Paulo Dev Full Stack',
    'usar_smtp' => true // true para usar SMTP, false para usar mail() nativo
);

// ========== CONFIGURAÇÕES BREVO SMTP ==========
// Para configurar o Brevo:
// 1. Crie uma conta gratuita em https://www.brevo.com
// 2. Vá em Settings > SMTP & API > SMTP
// 3. Copie suas credenciais SMTP e cole abaixo

$config_brevo = array(
    'host' => 'smtp-relay.brevo.com',
    'port' => 587,
    'username' => '', // SEU EMAIL DO BREVO AQUI
    'password' => '', // SUA CHAVE SMTP DO BREVO AQUI
    'from_email' => '', // MESMO EMAIL DO USERNAME
    'from_name' => 'João Paulo Dev Full Stack'
);

// ========== OUTRAS OPÇÕES DE SMTP GRATUITO ==========

// GMAIL SMTP (requer senha de app)
$config_gmail = array(
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'username' => 'joao.paulorcsilva@gmail.com',
    'password' => '', // COLE SUA SENHA DE APP AQUI
    'from_email' => 'joao.paulorcsilva@gmail.com',
    'from_name' => 'João Paulo Dev Full Stack'
);

// OUTLOOK/HOTMAIL SMTP (gratuito)
$config_outlook = array(
    'host' => 'smtp-mail.outlook.com',
    'port' => 587,
    'username' => 'joao.paulorcsilva@outlook.com', // ✏️ CRIE ESTE EMAIL NO OUTLOOK
    'password' => '', // ✏️ SUA SENHA OUTLOOK
    'from_email' => 'joao.paulorcsilva@outlook.com', // ✏️ MESMO EMAIL
    'from_name' => 'João Paulo Dev Full Stack'
);

// ZOHO MAIL SMTP (gratuito até 5 usuários)
$config_zoho = array(
    'host' => 'smtp.zoho.com',
    'port' => 587,
    'username' => 'joao.paulorcsilva@zohomail.com', // ✏️ CONFIGURE SEU EMAIL ZOHO AQUI
    'password' => '', // ✏️ CONFIGURE SUA SENHA ZOHO AQUI
    'from_email' => 'joao.paulorcsilva@zohomail.com', // ✏️ MESMO EMAIL ZOHO
    'from_name' => 'João Paulo Dev Full Stack'
);

// MAILTRAP SMTP (100% gratuito - SEMPRE FUNCIONA!)
$config_mailtrap = array(
    'host' => 'live.smtp.mailtrap.io',
    'port' => 587,
    'username' => 'api',
    'password' => '79b4e168ec999048328319d5436f9455',
    'from_email' => 'joao.paulorcsilva@gmail.com',
    'from_name' => 'João Paulo Dev Full Stack'
);

// SENDGRID SMTP (100 emails/dia gratuito)
$config_sendgrid = array(
    'host' => 'smtp.sendgrid.net',
    'port' => 587,
    'username' => 'apikey', // SEMPRE "apikey"
    'password' => '', // ✏️ SUA API KEY SENDGRID
    'from_email' => 'joao.paulorcsilva@gmail.com', // ✏️ SEU EMAIL VERIFICADO
    'from_name' => 'João Paulo Dev Full Stack'
);

// ========== CONFIGURAÇÃO ATIVA ==========
// Escolha qual configuração usar:
$smtp_config = $config_mailtrap; // Usando Mailtrap (SEMPRE FUNCIONA!)

// ========== INSTRUÇÕES ==========
/*
COMO CONFIGURAR:

1. BREVO (RECOMENDADO - 300 emails/dia grátis):
   - Acesse: https://www.brevo.com
   - Crie uma conta gratuita
   - Vá em Settings > SMTP & API > SMTP
   - Copie o username e password para $config_brevo

2. GMAIL:
   - Ative a verificação em 2 etapas
   - Gere uma senha de app em: https://myaccount.google.com/apppasswords
   - Use a senha de app no campo password

3. OUTLOOK/HOTMAIL:
   - Use seu email e senha normais
   - Pode precisar ativar "Acesso de aplicativos menos seguros"

4. ZOHO:
   - Crie uma conta em https://www.zoho.com/mail/
   - Use seu email e senha do Zoho

TESTE:
- Após configurar, teste enviando um email pelo formulário
- Verifique os logs de erro do servidor se não funcionar
- Você pode desativar SMTP mudando 'usar_smtp' para false
*/
?>