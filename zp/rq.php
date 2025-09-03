<?php
$pool = $_GET['pool'];
$mobile = $_GET['mobile'];
$description = $_GET['description'];


$data = array("merchant_id" => "d0fe5628-26ce-4f55-9c24-0da1fa8c03ca",
    "amount" => $pool,
    "callback_url" => "https://mrseyed.ct.ws/zp/zpverify.php",
    "description" => $description,
    "metadata" => ["email" => "info@mail.com", "mobile" => $mobile],
);
$jsonData = json_encode($data);
$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
));

$result = curl_exec($ch);
$err = curl_error($ch);
$result = json_decode($result, true, JSON_PRETTY_PRINT);
curl_close($ch);


if ($err) {
    echo "cURL Error #:" . $err;
} else {
    if (empty($result['errors'])) {
        if ($result['data']['code'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
        }
    } else {
        echo 'Error Code: ' . $result['errors']['code'];
        echo 'message: ' . $result['errors']['message'];

    }
}

