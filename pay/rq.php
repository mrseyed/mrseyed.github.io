<?php
$amount = $_POST['amount'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idcode = $_POST['idcode'];
$bdate = $_POST['bdate'];
$desc = $fname + $lname + "به کدملی" + $idcode + "مبلغ" + $amount;
$mobile = $_POST['mobile'];
?>

<?php
    "amount" => $amount,
    "callback_url" => "https://mrseyed.ct.ws/pay/ok.php",
    "description" => $desc,
    "metadata" => [ "email" => "info@email.com","mobile"=>$mobile],
    );
$jsonData = json_encode($data);
$ch = curl_init('https://zarinpal.com/pg/v4/payment/request.json');
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
         echo'Error Code: ' . $result['errors']['code'];
         echo'message: ' .  $result['errors']['message'];

    }
}

?>