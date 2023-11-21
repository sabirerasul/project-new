<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

session_start();

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';
include './mail_body.php';


$to_email = 'skinworldkanpur@gmail.com';

function sendSMTPMail($email, $name, $body, $subject, $files = '')
{
    $from = "info@skinworldkanpur.com";
    /*$mail = new PHPMailer(true);

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'test@atqits.com';
    $mail->Password   = 'Medc@aes2023';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;


    if (!empty($file)) {
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $mail->AddAttachment($file_tmp, $file_name);
    }

    //Recipients
    $mail->setFrom('test@atqits.com', 'RAMS Venture');
    $mail->addAddress($email, $name);

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;


    //$attachment = chunk_split(base64_encode(file_get_contents('file.pdf')));



    return ($mail->send()) ? true : false;

    */




    $boundary = md5("random"); // define boundary with a md5 hashed value


    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:" . $from . "\r\n"; // Sender Email
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary


    //plain text
    $body1 = "--$boundary\r\n";
    $body1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body1 .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body1 .= chunk_split(base64_encode($body));

    if (!empty($files)) {

        $tmp_name = $files['tmp_name']; // get the temporary file name of the file on the server
        $name     = $files['name']; // get the name of the file
        $size     = $files['size']; // get size of the file for size validation
        $type     = $files['type']; // get type of the file
        $error     = $files['error'];


        //read from the uploaded file & base64_encode content
        $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
        $content = fread($handle, $size); // reading the file
        fclose($handle);


        $encoded_content = chunk_split(base64_encode($content));

        //attachment
        $body1 .= "--$boundary\r\n";
        $body1 .= "Content-Type: $type; name=" . $name . "\r\n";
        $body1 .= "Content-Disposition: attachment; filename=" . $name . "\r\n";
        $body1 .= "Content-Transfer-Encoding: base64\r\n";
        $body1 .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
        $body1 .= $encoded_content; // Attaching the encoded file with email
    }

    // send email
    $result = mail($email, $subject, $body1, $headers);

    return $result;
}

$errors = [];
$data = [];

$value = $_POST['skin'];

$name = $value['name'];
$email = $value['email'];
$number = $value['mobile'];
$message = $value['message'];

if (empty($name)) {
    $errors['message'] = 'Name is required.';
} else {
    if (!name_filter($name)) {
        $errors['message'] = 'Name is not valid.';
    }
}

if (empty($email)) {
    $errors['message'] = 'Email is required.';
} else {
    if (!email_filter($email)) {
        $errors['message'] = 'Email is not a valid email address.';
    }
}

if (empty($number)) {
    $errors['message'] = 'Number is required.';
} else {
    if (!number_filter($number)) {
        $errors['message'] = 'Number is not valid.';
    }
}



if (empty($message)) {
    $errors['message'] = 'Message is required.';
}

if ( isInjected($name) || isInjected($email) || isInjected($number) || isInjected($message) ) {
	$errors['message'] = 'Invalid Data.';
}

$sword = word_filter($message);
if($sword !== true){
    $errors['message'] = 'You Cannot use sensitive word like '.$sword;
}


if (empty($errors['message'])) {

    $msg = [
        'name' => $name,
        'email' => $email,
        'number' => $number,
        'message' => $message,
    ];

    $subject = "Skin World Kanpur - New Enquiry From {$name}";
    $mailData1 = sendSMTPMail($to_email, $name, mailBody($msg), $subject);

    if ($mailData1) {
        $repMsg = "Hi " . $name . "
			Thank you for your email.
			We will endeavour to reply to you shortly.
			Please DO NOT reply to this email.
			Thank you";

        $replySub = "Receipt: Welcome Message | Skin World Kanpur";

        $mailData2 = sendSMTPMail($email, $name, $repMsg, $replySub);

        if ($mailData2) {
            $data['success'] = true;
            $data['message'] = 'Success!';
            $data['status'] = true;
        } else {
            $data['success'] = false;
            $data['message'] = 'A server error has occurred while sending mail';
            $data['status'] = false;
        }
    } else {
        $data['success'] = false;
        $data['message'] = 'A server error has occurred while sending mail';
        $data['status'] = false;
    }
} else {
    $data['success'] = false;
    $data['message'] = $errors['message'];
    $data['status'] = false;
}

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str)
{
    $injections = array(
        '(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

echo json_encode($data);
