<?php
$amount = $_POST['amount'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox.zarinpal.com/pg/v4/payment/request.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "merchant_id": "e830ff78-e4a4-496a-b1c7-757c8285a4a4",
  "amount": $amount,
  "callback_url": "http://example.com/verify",
  "description": "Transaction description.",
  "metadata": {
    "mobile": $mobile,
    "email": $email
  }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;