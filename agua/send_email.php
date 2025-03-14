<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $destinatario = "seuemail@example.com";  // Substitua pelo seu e-mail
    $assunto = "Nova mensagem do site Água e Vida";
    $corpo_email = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";
    $cabecalhos = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($destinatario, $assunto, $corpo_email, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
} else {
    echo "Método inválido!";
}
?>
