<?php


namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class ContactController extends BaseController
{
    public function __construct()
    {
        if (isset($_GET['email'])) {
            $this->sendEmail();
        }

        $this->template = "contacts.tpl.php";
		$this->data["header"]["pagetitle"] = " Отправить письмо ";

    }

    function sendEmail(){
        $this->data["content"] =  "Я буду пробовтаь отправить письмо";
// Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //var_dump($mail);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            //$mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'gmail-smtp-msa.l.google.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'phenix.ods@gmail.com';                     // SMTP username
            $mail->Password = 'Sasha115gh2';
            $mail->SMTPSecure = 'ssl';
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port = 465;

            //Recipients
            //$mail->From('phenix.ods@gmail.com');
            $mail->setFrom('phenix.ods@gmail.com', 'Mailer');
            $mail->addAddress('test-j5cv5@mail-tester.com', 'NinyDev');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        }catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        }

}