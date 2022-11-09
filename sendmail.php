<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(!isset($_POST['email'])&&!isset($_POST['mess'])&&!isset($_POST['name'])){
        header('Location:index.php');
        exit();
    }
    else 
    {
        try
        {
            $mail = new PHPMailer();

            $mail->isSMTP();

            $mail->Host = 's1.ct8.pl';
            $mail->Port = 465;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPAuth = true;

            $mail->Username = 'no-reply@lisekpl.ct8.pl';
            $mail->Password = 'Tajnehaslo1';

            $mail->CharSet = 'UTF-8';
            $mail->setFrom('no-reply@lisekpl.ct8.pl', 'Formularz kontaktowy');
            $mail->addAddress('support@lisekpl.ct8.pl');
            $mail->addReplyTo($_POST['email'], $_POST['name']);

            $mail->isHTML(true);
            $mail->Subject = 'Kontakt '.$_POST['tar'].' od '.$_POST['name'].' <'.$_POST['email'].'>';
            $mail->Body = $_POST['mess'];

            $mail->send();

            $_SESSION['umail'] = true;
            echo('mailwyslal');
        }
        catch(Exception $e)
        {
            echo "Błąd wysłania maila: {$mail->ErrorInfo}";
            $_SESSION['umail'] = false;
        }
    }

?>