<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "arojalcrew@gmail.com";
$mail->Password = "hrpcuoiyxxqnntux";

$mail->CharSet = 'UTF-8';

$mail->setFrom($email, $name);
$mail->addAddress("arojalcrew@gmail.com", $email);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo
"
<script>

    alert('Pomyślnie wysłano wiadomość');
    document.location.href = 'kontakt.php#formularz';

</script>

";

?>