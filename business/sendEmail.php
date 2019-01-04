include APPPATH . "../storage/PHPMailer-master/src/PHPMailer.php";
include APPPATH . "../storage/PHPMailer-master/src/Exception.php";
include APPPATH . "../storage/PHPMailer-master/src/OAuth.php";
include APPPATH . "../storage/PHPMailer-master/src/POP3.php";
include APPPATH . "../storage/PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subjectform = $_POST['subject'];
		$noidung = $_POST['message'];

		$to = 'colorneo2018@gmail.com';
		$subject = 'Gửi ý kiến';
		$message = "Name: " .$name ."\n"."Email: ".$email."\n"."Nội dung".$noidung;
		$headers = "from: " .$email;
		if (mail($to, $subject, $message,$headers)) {
			echo "Nội dung ý kiến của bạn đã được gửi đi";
		}
		else{
			echo "errow";
		}
	}
?>



