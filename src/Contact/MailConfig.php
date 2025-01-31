<?php

namespace Contact;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PDO;


class MailConfig
{
    /* public function __construct(private PDO $pdo) {} option to add client email and message to database */

    public function sendMail($email, $fullname, $message)
    {
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Invalid email format";
            return $errorMessage;
        } else if (empty($email) || empty($fullname) || empty($message)) {
            $errorMessage = "Please fill in all required fields";
            return $errorMessage;
        } else {
            $mail = new PHPMailer(true);
            try {
                $mail->SMTPDebug = 0;
                //send using SMTP
                $mail->isSMTP();
                //Set the SMTP server to send through
                $mail->Host = 'smtp.gmail.com';
                //Enable SMTP authentication
                $mail->SMTPAuth = true;
                //SMTP username
                $mail->Username = 'danieldavies300@gmail.com';
                //SMTP password
                $mail->Password = $_ENV['SMTP_Password'];
                //Enable TLS encryption
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                //TCP port to connect to (465) for 'PHPMailer::ENCRYPTION_SMTPS'
                $mail->Port = 587;
                //Recipients
                $mail->setFrom('danieldavies300@gmail.com', 'smtp@mailtrap.io');
                //Add a recipient
                $recipient = 'danieldavies300@gmail.com';
                $mail->addAddress($email, $recipient);
                //Set email format to HTML
                $mail->isHTML(true);


                $mail->Subject = 'Message from Contact Form - from: ' . $fullname;

                $mail->Body = '<p>You have a new message from your contact form:</p><p><strong>Name:</strong> ' . $fullname . '</p><p><strong>Email:</strong> ' . $email . '</p><p><strong>Message:</strong>' . $message . '</p>';

                $mail->send();
                return true;
                /* $stmt = $this->pdo->prepare("INSERT INTO contact_us (name, email, message) VALUES (:name, :email, :message)");
                $stmt->bindParam('name', $fullname);
                $stmt->bindParam('email', $email);
                $stmt->bindParam('message', $message); 
                $stmt->execute();          OPTIONAL: add client email and message to database*/
            } catch (Exception $e) {
                $errorMessage = "Message could not be sent: Invalid SMTP key.";
                return $errorMessage;
            }
        }
    }
}
