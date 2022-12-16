<?php
require_once "mvc/utility/utility.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class OrderAdmin extends Controller
{

    public $orderModel;

    public function __construct()
    {
        $this->orderModel = $this->model("OrderModel");
    }

    public function GetPage()
    {
        $allOrder = $this->orderModel->getAllOrder();
        $this->view("order/orderAdmin", [
            "allOrder" => $allOrder
        ]);
    }

    public function detailOrder($id)
    {
        $detailorder = $this->orderModel->getDetailOrder($id);
        $orderItem = $this->orderModel->getOrderItem($id);

        $this->view("order/detailOrder", [
            "detailOrder" => $detailorder,
            "orderItem" => $orderItem
        ]);
    }

    public function updateStatusOrder($id, $status)
    {
        // $this->orderModel->updateStatus($id, $status);
        if ($status == 1) {
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPDebug  = 1;
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "sphone.store.tmdt@gmail.com";
            $mail->Password = "bgsdckeoimlpbnje";
            $mail->IsHTML(true);
            $mail->AddReplyTo("sphone.store.tmdt@gmail.com");

            $orderItem = $this->orderModel->getOrderItem($id);
            $email = $orderItem['email'];
            $name = $orderItem['fullname'];
            $address = $orderItem['address'];
            $phone = $orderItem['phone'];
            $customer = "<b>Tên: </b>" . $name . " <br> <b>Địa chỉ: </b>" . $address . "<br> <b>Số điện thoại: </b>" . $phone . " <br>";

            $detailorder = $this->orderModel->getDetailOrder($id);
            $listProduct = "";
            $countDetail = count($detailorder);
            for ($i = 0; $i < $countDetail; $i++) {
                $listProduct = $listProduct . '
                <b>' . $i + 1 . '. ' . '
        ' . $detailorder[$i]['title'] . '</b>; Giá: ' . number_format($detailorder[$i]['price']) . ' đ, SL: ' . $detailorder[$i]['num'] . '. Tổng: ' . number_format($detailorder[$i]['total_money']) . ' đ<br>
            ';
            }

            $mail->AddAddress($email);
            $mail->Subject = "SPhone with love";
            $content = "<b>Cảm ơn " . $name . ".</b> </br> <p> Chúng tôi đã nhận được yêu cầu đặt hàng của bạn và đang xử lý nhé. Bạn sẽ nhận được đơn hàng trong thời gian sớm nhất có thể!</p> <b>Đơn hàng được giao đến:</b>  <br>" . $customer . " <br><b>Danh sách sản phẩm:</b> <br>" . $listProduct;
            $mail->MsgHTML($content);
            // echo $content;
            if (!$mail->Send()) {
                echo "Error while sending Email.";
                var_dump($mail);
            } else {
                echo "Email sent successfully";
            }
        }
        // header('Location: http://localhost/SPhone/OrderAdmin');
    }

    public function addOrderSuccess()
    {

        if (isset($_POST["btnCheckout"])) {
            $fullname = getPost('fullname');
            $address = getPost('address');
            $phone = getPost('phone');
            $email = getPost('email');
            $user_id = getPost('user_id');
            $totalMoney = getPost('totalMoney');
            if ($fullname == "" || $address == "" || $phone == "" || $email == "")
                header('Location: http://localhost/SPhone/Home/checkout/' . $totalMoney);
            else {
                $this->orderModel->insertOrders($user_id, $fullname, $address, $phone, $email, $totalMoney);
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
                $orderId = $this->orderModel->getOrderId($user_id);
                var_dump($orderId);
                for ($i = 0; $i < count($orderDetails); $i++) {
                    $this->orderModel->insertOrderDetail($orderId[0]["id"], $orderDetails[$i]["id"], $orderDetails[$i]["price"], $num[$i], $num[$i] * $orderDetails[$i]["price"]);
                }
                setcookie('cart', "", -60, '/');
                header('Location: http://localhost/SPhone/Home/succesOrder');
            }
        }
    }
}
