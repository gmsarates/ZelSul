<?php
$tmpNome = $_POST['hidName'];
$email = $_POST['hidEmail'];
$telefone = $_POST['hidTelefone'];
$imovel = $_POST['hidImovel'];
$cidade = $_POST['hidCidade'];
$cep = $_POST['hidCEP'];

$basculante = $_POST['qtBasculante'];
$portas = $_POST['qtPortas'];
$janelas = $_POST['qtJanelas'];
$presenca = $_POST['qtPresenca'];
$cameras = $_POST['qtCameras'];
$controles = $_POST['qtControles'];
$msg = $_POST['hidMsg'];

$sendTo = 'dalvan@zelsul.com.br';

  $from = $email;
  $subject = 'ORÇAMENTO ZELSUL - ' . strtoupper($tmpNome);

  
  $okMessage = 'Obrigado pela sua mensagem. Entraremos em contato em breve.';
  $errorMessage = 'Algum erro aconteceu no envio da mensagem. Atualize a página e tente novamente.';
  
  try {
    if (!empty($_POST)) {
      $message = "<html><body>";
      $message .= "<style type='text/css'>";
      $message .= ".tftable {font-size:12px;color:#333333;width:500px;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif}";
      $message .= ".tftable th {font-size:12px;background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}";
      $message .= ".tftable tr {background-color:#ffffff;}";
      $message .= ".tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}";
      $message .= ".tftable tr:hover {background-color:#ffff99;}";
      $message .= ".header {font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height: 10px;}";
      $message .= ".subHeader {font-family: Arial, Helvetica, sans-serif; font-size: 8px; line-height: 5px;}";
      $message .= "</style>";
      $message .= "<div style='width: 500px; height: 100%; margin: auto;'><div style='width: 500px; display: flex; justify-content: center; text-align: left;'><div style='width: 100px'>";
      $message .= "<img src='http://www.zelsul.com.br/images/better_logo.png' width='100px'>";
      $message .= "</div><div style='width: 400px; padding-top: 50px;'>";
      $message .= "<h1 class='header'>Formulário de contato - ORÇAMENTO ZELSUL</h1>";
      $message .= "<h2 class='subHeader'>Dados enviados da página <b>ORÇAMENTO</b>.</h2>";
      $message .= "</div></div><table class='tftable' border='1'>";
      $message .= "<tr><th style='width: 100px;'>Campo</th><th>Informação</th></tr>";
      $message .= "<tr><td>Nome</td><td>" . $tmpNome . "</td></tr>";
      $message .= "<tr><td>Email</td><td>" . $email . "</td></tr>";
      $message .= "<tr><td>Telefone</td><td>" . $telefone . "</td></tr>";
      $message .= "<tr><td>Imóvel</td><td>" . $imovel . "</td></tr>";
      $message .= "<tr><td>Cidade</td><td>" . $cidade . "</td></tr>";
      $message .= "<tr><td>CEP</td><td>" . $cep . "</td></tr>";
      $message .= "</table><hr><h1 class='header' style='margin-top: 10px;'>ITENS SELECIONADOS:</h1><table class='tftable' border='1' >";
      $message .= "<tr><th style='width: 100px;'>Campo</th><th>Informação</th></tr>";
      $message .= "<tr><td>Sensores de abertura [BASCULANTE]</td><td>" . $basculante . "</td></tr>";
      $message .= "<tr><td>Sensores de abertura [PORTAS]</td><td>" . $portas . "</td></tr>";
      $message .= "<tr><td>Sensores de abertura [JANELAS]</td><td>" . $janelas . "</td></tr>";
      $message .= "<tr><td>Sensores de presença</td><td>" . $presenca . "</td></tr>";
      $message .= "<tr><td>Câmeras internas</td><td>" . $cameras . "</td></tr>";
      $message .= "<tr><td>Controles remotos</td><td>" . $controles . "</td></tr>";
      $message .= "<tr><td>Mensagem</td><td>" . $msg . "</td></tr>";
      $message .= "</table><div style='width: 500px; text-align: right; margin-top: 3px;'>";
      $message .= "<span style='font-size: 8px; font-family: Arial;'> © Copyright 2019 <a href='https://www.facebook.com/saratesgb'>Gabriel Sarates</a></span>";
      $message .= "</div></div></body></html>";

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
