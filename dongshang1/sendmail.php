<?php
require("phpmailer/class.phpmailer.php");  // ประกาศใช้ class phpmailer กรุณาตรวจสอบ ว่าประกาศถูก path

$fm = "you@gmail.com"; // *** ต้องใช้อีเมล์ @gmail.com เท่านั้น ***
$to = "scpeecz@gmail.com"; // อีเมล์ที่ใช้รับข้อมูลจากแบบฟอร์ม
$custemail = $_POST['email']; // อีเมล์ของผู้ติดต่อที่กรอกผ่านแบบฟอร์ม
 
$subj = $_POST['subject'];
 
/* ------------------------------------------------------------------------------------------------------------- */
$message = "ชื่อ : ".$_POST['firstname']."\n";
$message.= "นามสกุล : ".$_POST['lastname']."\n";
$message.= "อีเมล์ผู้ส่ง : ".$_POST['email']."\n";
$message.= "หัวข้อ : ".$_POST['subject']."\n";
$message.= "รายละเอียด : ".$_POST['details']."\n";
/* ------------------------------------------------------------------------------------------------------------- */
 
/* หากต้องการรับข้อมูลจาก Form แบบไม่ระบุชื่อตัวแปร สามารถรับข้อมูลได้ไม่จำกัด ให้ลบบรรทัด 11-14 แล้วใช้ 19-22 แทน
     
foreach ($_POST as $key => $value) {
 //echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
 $message.= "Field ".htmlspecialchars($key)." = ".htmlspecialchars($value)."\n";
}
 
*/
$mesg = $message;
 
$mail = new PHPMailer();
$mail->CharSet = "utf-8"; 
 
/* ------------------------------------------------------------------------------------------------------------- */
/* ตั้งค่าการส่งอีเมล์ โดยใช้ SMTP ของ Gmail */
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure  = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "scpeecz@gmail.com";  // Gmail Email username
$mail->Password = "Piece23241167";            // Gmail Email password
/* ------------------------------------------------------------------------------------------------------------- */
 
$mail->From = $fm;
$mail->AddAddress($to);
$mail->AddReplyTo($custemail);
$mail->Subject = $subj;
$mail->Body = $mesg;
$mail->WordWrap = 50;  
//
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'ยังไม่สามารถส่งเมลล์ได้ในขณะนี้ ' . $mail->ErrorInfo;
exit;
} else {
header("Location: contact.php");
}
?>