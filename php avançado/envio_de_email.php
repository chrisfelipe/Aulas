
<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "ctrs136@gmail.com";
    $assunto = "cadastro";
    $corpo = "Nome: ".$nome."- E-mail ".$email." - Mensagem".$msg;
    $cabecalho = "From: Zeus1571069@gmail.com"."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer:PHP/".phpversion();
    mail($para,$assunto,$corpo,$cabecalho);

    echo "<h2>E-mail enviado com sucesso</h2>";
    exit();
}
?>



<form action="" method="POST">
     nome: <input type="text" name="nome" >
     <br>
     Email <input type="email" name="email">

     <br>

     Mensagem: <textarea name="msg" id="" cols="30" rows="10"></textarea> <br>

     <input type="submit" value="Enviar">
