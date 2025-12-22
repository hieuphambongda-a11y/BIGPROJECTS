<?php

// PHP Version 7.3.3

$result = [];

try {
  $key2 = "Iyz2habzyr7AG8SgvoBCbKwKi3UzlLi3";
  $postdata = file_get_contents('php://input');
  $postdatajson = json_decode($postdata, true);
  $mac = hash_hmac("sha256", $postdatajson["data"], $key2);

  $requestmac = $postdatajson["mac"];

  // kiểm tra callback hợp lệ (đến từ ZaloPay server)
  if (strcmp($mac, $requestmac) != 0) {
    // callback không hợp lệ
    $result["returncode"] = -1;
    $result["returnmessage"] = "mac not equal";
  } else {
    // thanh toán thành công
    // merchant cập nhật trạng thái cho đơn hàng
    $datajson = json_decode($postdatajson["data"], true);
    // echo "update order's status = success where apptransid = ". $dataJson["apptransid"];

    error_log("thanh toan thanh cong", 3, 'D:\XAMPP\htdocs\MyProject\php\logfile.log');

    $result["returncode"] = 1;
    $result["returnmessage"] = "success";
  }
} catch (Exception $e) {
  $result["returncode"] = 0; // ZaloPay server sẽ callback lại (tối đa 3 lần)
  $result["returnmessage"] = $e->getMessage();
}

// thông báo kết quả cho ZaloPay server
echo json_encode($result);