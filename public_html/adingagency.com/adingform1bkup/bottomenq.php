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
$message .= '<div>Message: '.$_REQUEST["message"].'</div><br>';
mail($to, $subject, $message, $headers);
echo "Success";
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


//SEND MAIL TO ADMIN
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
$mail->Host     = "relay-hosting.secureserver.net";
$mail->Mailer   = "smtp";
$mail->SetFrom("ajayviewham@gmail.com", "Ajay");
$mail->AddReplyTo("ajayviewham@gmail.com", "Ajay");
$mail->AddAddress("ajayviewham+admin@gmail.com");  //change this
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($message);
$mail->IsHTML(true);
if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
*/
?>