<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(!isset($_POST['email'])&&!isset($_POST['mess'])&&!isset($_POST['name'])){
        $_SESSION['umail'] = 'false';
        header('Location:index.php');
        exit();
    }
    else 
    {
        $email = $_POST['email'];
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
        $walidacjaok = true;
        $name = $_POST['name'];
        $mess = $_POST['mess'];
        if(filter_var($emailB, FILTER_VALIDATE_EMAIL) == false || $email != $emailB || $email == '')
        {
            $walidacjaok = false;
            $_SESSION['umail'] = 'false';
            header('Location:index.php');
            exit();
        }

        if(!isset($_POST['check']))
        {
            $walidacjaok = false;
            $_SESSION['umail'] = 'false';
            header('Location:index.php');
            exit();
        }
    
        if($name == '')
        {
            $walidacjaok = false;
            $_SESSION['umail'] = 'false';
            header('Location:index.php');
            exit();
        }

        if(strlen($name)>20)
        {
            $walidacjaok = false;
            $_SESSION['umail'] = 'false';
            header('Location:index.php');
            exit();
        }

        if(strlen($mess) < 3 || $mess='')
        {
            $walidacjaok = false;
            $_SESSION['umail'] = 'false';
            header('Location:index.php');
            exit();
        }
        if($walidacjaok == true){
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
                $mail->setFrom('no-reply@lisekpl.ct8.pl', $_POST['name']);
                $mail->addAddress('support@lisekpl.ct8.pl');
                $mail->addReplyTo($_POST['email'], $_POST['name']);

                $mail->isHTML(false);
                $mail->Subject = 'Kontakt '.$_POST['tar'].' od '.$_POST['name'].' <'.$_POST['email'].'>';
                $mail->Body = $_POST['mess'];
                
                $_SESSION['umail'] = 'true';
                echo($_SESSION['umail']);
                echo('mailwyslal');

                $mail->send();

                unset($_POST['email']);
                unset($_POST['name']);
                unset($_POST['tar']);
                unset($_POST['mess']);

                
                header('Location:index.php');
            }
            catch(Exception $e)
            {
                echo "Błąd wysłania maila: {$mail->ErrorInfo}";
                $_SESSION['umail'] = 'false';
                echo($_SESSION['umail']);
                header('Location:index.php');
            }
        }
    }

?>