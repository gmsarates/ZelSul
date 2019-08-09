<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  
  $email_from = $visitor_email;
	$email_subject = "Bairro Seguro - Contato";
  $email_body = "<b>From: </b> $name <$visitor_email>\n <b>Telefone: </b> $phone \n\n <Mensagem: </b> \n $message";

  $to = "bairroseguro@zelsul.com.br";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);


?>