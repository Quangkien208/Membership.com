<?php
session_start();
if(isset($_POST["rank"]))
{
  if(empty ($_SESSION["email"])){
    echo json_encode(["status"=>3]);
    die;
  }
  else
  {
    echo json_encode(["status"=>1,"item"=>rand(0,9),"mess"=>"Chúc mừng bạn đã nhận được một món quà nhỏ, Vật phẩm sẽ có trong thông báo sau 24h"]); die;
  }
}