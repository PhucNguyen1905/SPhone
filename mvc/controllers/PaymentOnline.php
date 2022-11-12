<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once "mvc/utility/utility.php";

class PaymentOnline extends Controller
{

    function GetPage()
    {
        $fullname = getPost('fullname');
        $address = getPost('address');
        $phone = getPost('phone');
        $email = getPost('email');
        $user_id = getPost('user_id');
        $totalMoney = getPost('amount');
        if ($fullname == "" || $address == "" || $phone == "" || $email == "")
            header('Location: http://localhost/SPhone/Home/paymentOnline/' . $totalMoney);
        else {
            $orderModel = $this->model("OrderModel");
            $orderModel->insertOrders($user_id, $fullname, $address, $phone, $email, $totalMoney);
            $productModel = $this->model("ProductModel");
            $cart = [];
            $num = [];
            if (isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }
            $idList = [];
            foreach ($cart as $item) {
                $idList[] = $item['id'];
                $num[] = $item['num'];
            }
            if (count($idList) > 0) {
                $idList = implode(',', $idList);
                //[2, 5, 6] => 2,5,6
                $orderDetails = $productModel->getProductOrder($idList);
            } else {
                $orderDetails = [];
            }
            $orderId = $orderModel->getOrderId($user_id);

            for ($i = 0; $i < count($orderDetails); $i++) {
                $orderModel->insertOrderDetail($orderId[0]["id"], $orderDetails[$i]["id"], $orderDetails[$i]["price"], $num[$i], $num[$i] * $orderDetails[$i]["price"]);
            }
        }
        $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $_POST['order_desc'];
        $vnp_OrderType = $_POST['order_type'];
        $vnp_Amount = $_POST['amount'] * 100;
        $vnp_Locale = $_POST['language'];
        $vnp_BankCode = $_POST['bank_code'];
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_Returnurl = "http://localhost/SPhone/vnpay_return.php";
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_TmnCode = "M8HTHR13"; //Website ID in VNPAY System
        $vnp_HashSecret = "LJWGQOQSMCOBQHYJQOWTTISWHQURIMZJ"; //Secret key

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        var_dump($inputData);
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }
}
