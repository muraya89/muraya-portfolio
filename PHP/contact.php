<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Composer autoload

// --- CONFIGURATION ---
$isLocal = true; // set false on production
$errorMessage = '';

// SMTP settings for local (Mailtrap) and production
$smtpSettings = $isLocal
    ? [
        'host' => 'smtp.mailtrap.io',
        'username' => 'effecb4418737c',
        'password' => 'aed785fe86da59',
        'port' => 587,
        'secure' => 'tls'
    ]
    : [
        'host' => 'smtp.gmail.com',
        'username' => 'susanmuraya028@gmail.com',
        'password' => 'YOUR_APP_PASSWORD', // Gmail App Password if 2FA enabled
        'port' => 587,
        'secure' => 'tls'
    ];

// --- HANDLE FORM SUBMISSION ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // 2. Send email
    $mail = new PHPMailer(true);
    
    session_start();
    
    function saveToDatabase($name, $email, $subject, $message) {
        // Database connection and operations
         $conn = new mysqli('localhost', 'root', '', 'portfolio');
        if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);

        $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if (!$stmt->execute()) {
            $stmt->close();
            $conn->close();
            return false;
        }

        $stmt->close();
        $conn->close();
        return true;
    }   

    try {
        $mail->SMTPDebug = 2; 
        $mail->Debugoutput = 'html';
        $mail->isSMTP();
        $mail->Host       = $smtpSettings['host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpSettings['username'];
        $mail->Password   = $smtpSettings['password'];
        $mail->SMTPSecure = $smtpSettings['secure'];
        $mail->Port       = $smtpSettings['port'];

        $mail->setFrom($email, $name);
        $mail->addAddress('susanmuraya028@gmail.com'); // your inbox
        $mail->addReplyTo($email, $name);

        $mail->Subject = $subject;
        $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";
        
        $mail_success = $mail->send();
        $db_success = saveToDatabase($name, $email, $subject, $message);
        if($mail_success && $db_success){
            $_SESSION['success'] = true;
        }else{
            $errorMessage = "Yikes! The internet goblins ate your message. Send it again!";
            $_SESSION['error'] = $errorMessage;
        };
    } catch (Exception $e) {
        $errorMessage = "Yikes! The internet goblins ate your message. Send it again!";
        $_SESSION['error'] = $errorMessage;
    }
    
    header("Location:"  . $_SERVER['HTTP_REFERER'].'#contact');

}
?>