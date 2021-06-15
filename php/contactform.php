<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';






//Have they clicked the ubmit button?
    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['longText'];

        $mailTo = "alba_sp@live.com";
        $headers = "From: ".$mailFrom;
        $subject = "Web Enquiry";




                                
                        //Instantiation and passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = 0;                      //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'tt9623168@gmail.com';                     //SMTP username
                            $mail->Password   = '8613269tt';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



                            /*
                            //Recipients
                            */
                            $mail->setFrom('tt9623168@gmail.com', $mailFrom);
                            $mail->addAddress('tt9623168@gmail.com');   

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = "Mail from: ".$name ;
                            $mail->Body    = $message;
                        

                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }


        header("Location: ../index.php?mailsend");

    }


    


?>