<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {
   $name = $_POST['jmeno']; //getting customer name
   $fromEmail = $_POST['odesilatel']; //getting customer email
   $subject = $_POST['text']; //getting subject line from client
   $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign"; // For customer confirmation
  }
  

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aionacountsm@gmail.com';                     //SMTP username
    $mail->Password   = 'nrmiivfdusjibouu';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aionacountsm@gmail.com', 'Vojta');

    $mail->addAddress($fromEmail, $name);     //Add a recipient
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject from' . $name;
    $mail->Body    = $subject;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

 
?>