<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


   $name = filter_var($_POST['jmeno'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); //Jméno pisatele
   $fromEmail = filter_var($_POST['odesilatel'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); //email pisatele
   $subject = filter_var($_POST['text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); //zpráva od pisatele
   $confirmationSubject = "Dotaz na stránce GOLF"; //Předmět zprávy
   $confirmation = "Potvrzení: Vaše zpráva byla úspěšně odeslána."; // Zpráva pro pisatele, že email byl odeslán
 

  
   $mail = new PHPMailer(true);
try {
    //Server settings
    $mail->CharSet = "UTF-8";
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aionacountsm';                     //SMTP username
    $mail->Password   = 'nrmiivfdusjibouu';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;
    $mail->isHTML(true);         

    //Recipients
    $mail->setFrom('aionacountsm@gmail.com', 'Golfové blbiny');
    $mail->addAddress('aionacountsm@gmail.com');
    $mail->addReplyTo($fromEmail);

    //celá zpráva
    $mail->Subject = "Zpráva z formuláře na webové stránce od " . html_entity_decode($name);
    $body = "<p><strong>Dobrý den</strong>,<br> přišel Vám dotaz z webové stránky od <strong>" . $name . "</strong> v následujícím znění: " . "<br><br>" . $subject . "</p>";

    
    $mail->Body = $body;
    $mail->AltBody = $body;
    $mail->send();


    $mail->ClearAddresses(); // Clear addresses
    $mail->addAddress($fromEmail); // Email pro potvrzení
    $mail->isHTML(true);
    $mail->Subject    = $confirmationSubject; // Předmět zprávy
    $mail->Body       = $confirmation; // Zpráva
    $mail->AltBody    = $confirmation; // Text zprávy čistý
    $mail->Send(); // Send


    header("location: /golf/index.php?sent");
    //návrat na index po poslání zprávy
}
    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 
?>