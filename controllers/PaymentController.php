
<?php
require '../lib/vendor/autoload.php';

  $token = $_REQUEST["token"];
  $payment_method_id = $_REQUEST["payment_method_id"];
  $installments = $_REQUEST["installments"];
  $issuer_id = $_REQUEST["issuer_id"];

  MercadoPago\SDK::setAccessToken("TEST-2014465533688687-060517-3e884edf7f7e1fafae9756d94dcdeac3-234634458");
  //...
  $payment = new MercadoPago\Payment();
  $payment->transaction_amount = 100;
  $payment->token = $token;
  $payment->description = "Blue shirt";
  $payment->installments = $installments;
  $payment->payment_method_id = $payment_method_id;
  $payment->issuer_id = $issuer_id;
  $payment->payer = array(
  "email" => "contato@cyfer.com.br"
  );
  // Armazena e envia o pagamento
  $payment->save();
  //...
  // Imprime o status do pagamento
  echo $payment->status;
  //...

?>
