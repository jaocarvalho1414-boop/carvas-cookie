<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados dos campos 'name' do HTML
    $nome = strip_tags(trim($_POST['nome_cliente']));
    $pedido = strip_tags(trim($_POST['pedido_cliente']));

    // --- CONFIGURAÇÃO DO E-MAIL ---
    $email_destino = "carvascookie@gmail.com"; // COLOQUE SEU E-MAIL AQUI
    $assunto = "Novo Pedido de: " . $nome;

    $corpo = "Você recebeu um novo pedido:\n\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "Pedido: " . $pedido . "\n";

    $headers = "From: jaocarvalho1414@gmail.com" . "\r\n" .
               "Reply-To: contato@seusite.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if(mail($email_destino, $assunto, $corpo, $headers)){
        echo "<h1>Sucesso!</h1><p>O pedido de $nome foi enviado.</p>";
    } else {
        echo "<h1>Erro!</h1><p>Houve um problema ao enviar o e-mail.</p>";
    }
} else {
    echo "Acesso inválido.";
}
?>