<?php
session_start();
define("USER_ADMIN","vinhdzdz123");
define("PASSWORD","vinhdz08072005");
if(isset($_POST["username"]) and isset($_POST["password"]))
{
$username = $_POST["username"];
$password = $_POST["password"];
if($username != USER_ADMIN){
  echo '<script>alert("Tài khoản không chính xác vui lòng thử lại"); window.location="dangnhap.php";</script>';
}
if($password != PASSWORD){
  echo '<script>alert("Tài khoản không chính xác vui lòng thử lại"); window.location="dangnhap.php";</script>';
}
if($username == USER_ADMIN and $password == PASSWORD){
  $_SESSION["admin"] = md5($username.$password);
  echo "<script>window.location='quanly.php'</script>";
}
}
?>
<html>
  <head>
    <title>Admin Quản Lý Web</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <meta name="theme-color" content="#3b5998" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>
  <body>
    <div id="form-head">
      <div class="form">
        <div id="theme"></div>
        <h3>Đăng Nhập Admin</h3>
        <form action="" id="admin" method="POST">
          <div class="username">
            <input type="text" id="username" name="username" placeholder="UserName"/>
          </div>
          <div class="username">
            <input type="password" id="password" placeholder="*********" name="password" />
          </div>
          <div class="button">
          <span style="background-color: white;
 color: #636363; font-family: 'arial' , sans-serif; font-size: 16px;"></span><button style="background-color: white; 
border-radius: 2px; border: 1px solid #e95950; box-sizing: border-box; 
color: #e95950; display: inline-block; font-family: Arial, sans-serif;
font-size: 14px; line-height: 16.8px; 
padding: 10px 14px; text-decoration-line: none; transition: all 0.2s;" id="button">Đăng Nhập</button>
</div>
        </form>
      </div>
    </div>
  </body>
</html>