<?php
//ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล MySql
$fix = "shopcart_";
$dbname="myshop";
$dbuser="root";
$dbpass="";
$dbhost="localhost";
$dbport="3360";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$connection->set_charset('utf8');

//ข้อมูลสำหรับเชื่อมต่อ Mail Server
$sendmailtype = "0"; // 0 = PHP Mail(),  1 = SMTP (PHPMailer)
$smtp_hostname="mail.yourdomain.com";
$smtp_portno = "25"; //หมายเลข Port สำหรับส่งอีเมล์ขาออก
$smtp_username="email@yourdomain.com"; //ต้องเป็นอีเมล์ที่มีอยู่ในโฮสต์เท่านั้น
$smtp_password="******";
$smtp_attachfile ="0";

$logowidth= "220";
$diffHour = "";
$diffMinute = "";
$createon = date("Y-m-d H:i:s");
$folder = "images";
$version = "SMEWeb Version 2.0";
//ขนาดกว้างของรูปภาพขนาดกลาง เมื่อถูกย่อ
$thumbwidth = "120";
//ขนาดกว้างของรูปภาพขนาดเล็ก เมื่อถูกย่อ
$thumbwidth2 = "90";
//จำนวนรูปภาพประกอบใน เนื้อหา
$Limages = "4";
//จำนวนการแสดง สินค้า-เนื้อหาใหม่หน้าแรก
$Snew = "4";
//จำนวนการแสดง สินค้าในแต่ละหมวด
$Smax = "30";
//จำนวนออปชั่นสินค้า
$Sproducts = "6";
//จำนวนการแสดงคำถามในเว็บบอร์ด และจำนวนลิ้งค์ที่พบใน search
$Sbb = "10";
//จำนวนช่องรับข้อมูลของ วิธีส่งสินค้า และ ชำระเงิน (backshopoffice.php)
$Sshipmethod = "5";
//ความกว้างของเว็บเพจ pixel
$Spagewidth = "1000";
$bannerwidth= ($Spagewidth-221);
//ความกว้างของ form (payment method / pay confirm / contact us)
$formwidth = "550";

$syscolor = "#555555";
$syscolor1 = "#f9f9f9";
$syscolor2 = "#dddddd";
$syscolor3 = "#eeeeee";
$REQUEST_URI = (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['SCRIPT_NAME'] . (( isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : '')));
foreach($_POST AS $key => $value) {    ${$key} = $value; }
foreach($_GET AS $key => $value) {    ${$key} = $value; }
$REMOTE_ADDR = getenv('REMOTE_ADDR');
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
$PHP_SELF = $_SERVER['PHP_SELF'];
$url = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url);
$dir = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
$dir .= $parts[$i] . '/';
}

?>