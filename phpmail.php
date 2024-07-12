<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'info@datelly.sa';   //SMTP write your email
    $mail->Password   = 'xbdtokstzzkwpart';      //SMTP password                    dkcvzgzkkiadsujn
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('info@datelly.sa');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    $subject = '';

    // Determine the subject based on the form type
    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']) {
            case 'msg':
                $subject = "طلب تواصل معنا";
                $header = 'http://localhost/datelly%20code/contact_us.php';
                $Status ='الرسالة';
                break;
            case 'dem':
                $subject = 'طلب صندوق هدايا ';
                $header = 'http://localhost/datelly%20code/gifts.php';
                $Status ='طلبك';
                break;
        }
        }

    //Content
    
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $subject;   // email subject headings
    $mail->Body    = '<h3>الاسم: </h3>' .$_POST["name"]. '<br> <h3>رقم الهاتف : </h3>' .$_POST["phone"]. '<br> <h3>الرسالة : </h3>' .$_POST["message"]. ''; //email message

    // Success sent message alert
    $mail->send();
    
    header("Location: $header?status=$status");
    exit();
}

?>