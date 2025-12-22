<?php

// PHP Version 7.3.3

$amount_received = isset($_POST['amount']) ? (int)$_POST['amount'] : 0;
$course_name = isset($_POST['course_name']) ? $_POST['course_name'] : "Sản phẩm demo";

$config = [
  "appid" => 553,
  "key1" => "9phuAOYhan4urywHTh0ndEXiV3pKHr5Q",
  "key2" => "Iyz2habzyr7AG8SgvoBCbKwKi3UzlLi3",
  "endpoint" => "https://sandbox.zalopay.com.vn/v001/tpe/createorder"
];

$embeddata = ['redirecturl' => 'http://localhost/MyProject/php/result.php'];
$items = [];
$order = [
  "appid" => $config["appid"],
  "apptime" => round(microtime(true) * 1000), // miliseconds
  "apptransid" => date("ymd")."_".uniqid(), // mã giao dich có định dạng yyMMdd_xxxx
  "appuser" => "demo",
  "item" => json_encode($items, JSON_UNESCAPED_UNICODE),
  "embeddata" => json_encode($embeddata, JSON_UNESCAPED_UNICODE),
  "amount" => $amount_received,
  "description" => "Thanh toán: " . $course_name,
  "bankcode" => "",
  "callbackurl" => "https://phyllotactic-bruna-chorographically.ngrok-free.dev/MyProject/php/callback.php"
];

// appid|apptransid|appuser|amount|apptime|embeddata|item
$data = $order["appid"]."|".$order["apptransid"]."|".$order["appuser"]."|".$order["amount"]
  ."|".$order["apptime"]."|".$order["embeddata"]."|".$order["item"];
$order["mac"] = hash_hmac("sha256", $data, $config["key1"]);

$context = stream_context_create([
  "http" => [
    "header" => "Content-type: application/x-www-form-urlencoded\r\n",
    "method" => "POST",
    "content" => http_build_query($order)
  ]
]);

$resp = file_get_contents($config["endpoint"], false, $context);
$result = json_decode($resp, true);

if($result['returncode'] == 1) {
    header("Location:" .$result['orderurl']);
    exit;
}

foreach ($result as $key => $value) {
  echo "$key: $value<br>";
}