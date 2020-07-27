<?php
$to = $_REQUEST["email"];
$_POST['req-email'] = "ajay@ading.agency";
$subject = 'Regarding your enquiry with ADING';
$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><body>';
$message .= '<div>Hello, '.$_REQUEST["name"].'</div><br>';
$message .= '<div>Thanku for contact us. We will get back to you soon</div><br>';
$message .= '<div>Best Regards,<br> Ajay<br>+91 94929 73688</div><br>';
$message .= '</body></html>';
if( mail($to, $subject, $message, $headers))
{
    echo "Mail sent";
}
else{
    echo "Mail Not sent"; 
}

$to = 'ajaikryshna@gmail.com';
//$to = "piridi.venkat+ajayading@gmail.com";
//$to = "ajay@ading.agency";
$_POST['req-email'] = "ajay@ading.agency";
$subject = 'User contact information: ADING';
$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//SEND MAIL TO ADMIN
$message = '<html><body>';
$message .= '<div>Name: '.$_REQUEST["name"].'</div><br>';
$message .= '<div>Email: '.$_REQUEST["email"].'</div><br>';
$message .= '<div>Looking for: '.$_REQUEST["looking_for"].'</div><br>';
$message .= '<div>Website: '.$_REQUEST["website"].'</div><br>';
$message .= '<div>Phone: '.$_REQUEST["phone"].'</div><br>';
$message .= '<div>Message: '.$_REQUEST["message"].'</div><br>';
mail($to, $subject, $message, $headers);
//echo "Success";
/*if( mail($to, $subject, $message, $headers))
{
    echo "DDMail sentDD";
}
else{
    echo "DDMail Not sentDDD"; 
}*/
//echo "Success";
//SEND MAIL TO USER
/*
$message = '<html><body>';
$message .= '<div>Dear '.$_REQUEST["name"].'</div><br>';
$message .= '<div>Thanku for contact us. We will get back to you soon</div><br>';
$message .= '<div>Best Regards,<br>Ajay<br>+91 94929 73688</div><br>';
$message .= '</body></html>';
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
//$mail = new PHPMailer();
$mail = new PHPMailer\PHPMailer\PHPMailer();
$subject = 'Regarding your enquiry with ADING';
//$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "ajay18krishna";
$mail->Password = "Workship11@1239$";
$mail->Host     = "sg2plcpnl0226.prod.sin2.secureserver.net";
$mail->Mailer   = "smtp";
$mail->SetFrom("ajayviewham@gmail.com", "Ajay");
$mail->AddReplyTo("ajayviewham@gmail.com", "Ajay");
$mail->AddAddress($_REQUEST["email"]);
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($message);
$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "Problem on sending mail";
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else 
echo "Mail sent";

*/
//SEND MAIL TO ADMIN
/*
$message = '<html><body>';
$message .= '<div>Name: '.$_REQUEST["name"].'</div><br>';
$message .= '<div>Email: '.$_REQUEST["email"].'</div><br>';
$message .= '<div>Looking for: '.$_REQUEST["looking_for"].'</div><br>';
$message .= '<div>Website: '.$_REQUEST["website"].'</div><br>';
$message .= '<div>Phone: '.$_REQUEST["phone"].'</div><br>';
$message .= '<div>Message: '.$_REQUEST["message"].'</div><br>';
$message .= '</body></html>';
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
//$mail = new PHPMailer();
$mail = new PHPMailer\PHPMailer\PHPMailer();
$subject = 'User contact information: ADING';
//$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "ajayviewham@gmail.com";
$mail->Password = "2124viewham";
//$mail->Host     = "relay-hosting.secureserver.net";
$mail->Host     = "smtp.gmail.com";
$mail->SMTPDebug  = 2;
$mail->Mailer   = "smtp";
$mail->SetFrom("ajayviewham@gmail.com", "Ajay");
$mail->AddReplyTo("ajayviewham@gmail.com", "Ajay");
$mail->AddAddress("ajay@ading.agency");  //change this
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($message);
$mail->IsHTML(true);
if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "GOOGLE LOGIN Mail sent";

$subject = 'User contact information: ADING';
$account="ajay@ading.agency";
$password='Work$hip@18';//"accountpassword";
$to="ajay@ading.agency";
$from=$_REQUEST["email"];//"ajay@ading.agency";
$from_name=$_REQUEST["name"];//"Vishal G.V";
//$msg="<strong>This is a bold text.</strong>"; // HTML message
$message = '<html><body>';
$message .= '<div>Name: '.$_REQUEST["name"].'</div><br>';
$message .= '<div>Email: '.$_REQUEST["email"].'</div><br>';
$message .= '<div>Looking for: '.$_REQUEST["looking_for"].'</div><br>';
$message .= '<div>Website: '.$_REQUEST["website"].'</div><br>';
$message .= '<div>Phone: '.$_REQUEST["phone"].'</div><br>';
$message .= '<div>Message: '.$_REQUEST["message"].'</div><br>';
//$subject="HTML message";
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';
//$mail = new PHPMailer();
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
/*$mail->CharSet = 'UTF-8';
$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->SMTPDebug  = 2;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'tls';

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25; 

$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->addAddress($to);
if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent 123X";
*/
?>