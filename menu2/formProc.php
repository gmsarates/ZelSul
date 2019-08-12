<?php
// $nome = $_POST['name'];
// $telefone = $_POST['phone'];
// $emailCliente = $_POST['email'];
// $servico = $_POST['servico'];
// $mensagem = $_POST['message'];
// $pagina = $_POST['pagina'];

// $to = 'bairroseguro@zelsul.com.br';
// $subject = 'Bairro Seguro - Contato';
// $from = $emailCliente;
 
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// // Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message
// $message = '<html><body>';
// $message = "<style type='text/css'>";
// $message .= ".tftable {font-size:12px;color:#333333;width:500px;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif}";
// $message .= ".tftable th {font-size:12px;background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}";
// $message .= ".tftable tr {background-color:#ffffff;}";
// $message .= ".tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}";
// $message .= ".tftable tr:hover {background-color:#ffff99;}";
// $message .= ".header {font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height: 10px;}";
// $message .= ".subHeader {font-family: Arial, Helvetica, sans-serif; font-size: 8px; line-height: 5px;}";
// $message .= "</style>";
// $message .= "<div style='width: 550px; height: 100%; margin: auto;'><div style='width: 500px; display: flex; justify-content: center; text-align: left;'><div style='width: 100px'>";
// $message .= "<img src='http://www.zelsul.com.br/images/better_logo.png' width='100px'>";
// $message .= "</div><div style='width: 400px; padding-top: 50px;'>";
// $message .= "<h1 class='header'>Formulário de contato - ZELSUL</h1>";
// $message .= "<h2 class='subHeader'>Dados enviados da página <b>" . $pagina . "</b> - <a href='http://www.zelsul.com.br/" .$pagina ."'>http://www.zelsul.com.br/" . $pagina ."</a></h2>";
// $message .= "</div></div><table class='tftable' border='1'>";
// $message .= "<tr><th style='width: 100px;'>Campo</th><th>Informação</th></tr>";
// $message .= "<tr><td>Nome</td><td>" . $nome . "</td></tr>";
// $message .= "<tr><td>Email</td><td>" . $emailCliente . "</td></tr>";
// $message .= "<tr><td>Telefone</td><td>" . $telefone . "</td></tr>";
// $message .= "<tr><td>Serviço</td><td>" . $servico . "</td></tr>";
// $message .= "<tr><td>Mensagem</td><td>" . $mensagem . "</td></tr>";
// $message .= "</table></div>";
// $message .= '</body></html>';
 
// // Sending email
// if(mail($to, $subject, $message, $headers)){
//     alert('Your mail has been sent successfully.');
//     header('./inicio');
// } else{
//     alert('Unable to send email. Please try again.');
//     header('./inicio');
// }

  $nome = $_POST['name'];
  $telefone = $_POST['phone'];
  $emailCliente = $_POST['email'];
  $mensagem = $_POST['message'];
  $pagina = $_POST['pagina'];
  
  if (strcmp($pagina, 'bairroseguro') == 0) {
    $sendTo = 'bairroseguro@zelsul.com.br, contato@zelsul.com.br';
    $servico = 'BAIRRO SEGURO';
  } else {
    $sendTo = 'contato@zelsul.com.br';
    $servico = $_POST['servico'];
  }

  $from = $emailCliente;
  $subject = 'ZELSUL - Contato [' . strtoupper($pagina) . ']';

  
  $okMessage = 'Obrigado pela sua mensagem. Entraremos em contato em breve.';
  $errorMessage = 'Algum erro aconteceu no envio da mensagem. Atualize a página e tente novamente.';
  
  try {
    if (!empty($_POST)) {
      $message = '<html><body>';
      $message = "<style type='text/css'>";
      $message .= ".tftable {font-size:12px;color:#333333;width:500px;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif}";
      $message .= ".tftable th {font-size:12px;background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}";
      $message .= ".tftable tr {background-color:#ffffff;}";
      $message .= ".tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}";
      $message .= ".tftable tr:hover {background-color:#ffff99;}";
      $message .= ".header {font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height: 10px;}";
      $message .= ".subHeader {font-family: Arial, Helvetica, sans-serif; font-size: 8px; line-height: 5px;}";
      $message .= "</style>";
      $message .= "<div style='width: 550px; height: 100%; margin: auto;'><div style='width: 500px; display: flex; justify-content: center; text-align: left;'><div style='width: 100px'>";
      $message .= "<img src='http://www.zelsul.com.br/images/better_logo.png' width='100px'>";
      $message .= "</div><div style='width: 400px; padding-top: 50px;'>";
      $message .= "<h1 class='header'>Formulário de contato - ZELSUL</h1>";
      $message .= "<h2 class='subHeader'>Dados enviados da página <b>" . strtoupper($pagina) . "</b> - <a href='http://www.zelsul.com.br/" .$pagina ."'>http://www.zelsul.com.br/" . $pagina ."</a></h2>";
      $message .= "</div></div><table class='tftable' border='1'>";
      $message .= "<tr><th style='width: 100px;'>Campo</th><th>Informação</th></tr>";
      $message .= "<tr><td>Nome</td><td>" . $nome . "</td></tr>";
      $message .= "<tr><td>Email</td><td>" . $emailCliente . "</td></tr>";
      $message .= "<tr><td>Telefone</td><td>" . $telefone . "</td></tr>";
      $message .= "<tr><td>Serviço</td><td>" . $servico . "</td></tr>";
      $message .= "<tr><td>Mensagem</td><td>" . $mensagem . "</td></tr>";
      $message .= "</table><div style='width: 500px; text-align: right; margin-top: 3px;'>";
      $message .= "<span style='font-size: 8px; font-family: Arial;'> © Copyright 2019 <a href='https://www.facebook.com/saratesgb'>Gabriel Sarates</a></span>";
      $message .= "</div></div>";
      $message .= '</body></html>';

      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      
      // Create email headers
      $headers .= 'From: '.$from."\r\n".
      'Reply-To: '.$from."\r\n" .
      'X-Mailer: PHP/' . phpversion();

      mail($sendTo, $subject, $message, $headers);
      $responseArray = array('type' => 'success', 'message' => $okMessage);
      }
  } catch (\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
  }
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    header('Content-Type: application/json');
    echo $encoded;
  } else {
    echo $responseArray['message'];
  }
?>
