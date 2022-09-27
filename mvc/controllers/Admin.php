<?php

class Admin extends Controller
{

    public function __construct()
    {
        $this->orderModel = $this->model("OrderModel");
    }

    function GetPage()
    {
        $doanhthu = $this->orderModel->getRevenue();
        $this->view("admin", [
            "doanhthu" => $doanhthu
        ]);
    }
}
