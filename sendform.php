<?php
$method = $_SERVER['REQUEST_METHOD'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = '****************';  // Accaunt Google
  $mail->Password = '****************';         // Password SMTP
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port = 465;
  $mail->CharSet = "UTF-8";
  $mail->isHTML(true);
  $mail->setFrom('****************', 'My Site');  // Accaunt Google
  $mail->addAddress('****************');  // My accepting mail

  if ( $method === 'POST' ) {
    $mail->Subject = trim($_POST["project_name"]);
    $mail->Body    = trim($_POST["form_subject"]) . '<br>
      - Имя: ' . htmlspecialchars(stripslashes($_POST['name'])) . '<br>
      - Телефон: ' . htmlspecialchars(stripslashes($_POST['phone'])) . '<br>
      - Email: ' . htmlspecialchars(stripslashes($_POST['email'])) . '<br>
      - Сообщение: ' . htmlspecialchars(stripslashes($_POST['message'])) . '<br>
      - Formcheck: ' . $_POST['formcheck'] . 'Yes';
    $arrayfield = array(
      $_POST["target_text"],
      $_POST["target_page-text"],
      $_POST["target_page-number"],
      $_POST["target_page-email"],
      $_POST["target_page-phone"]
    );
    $spam = implode("", array_map("strval", $arrayfield));
  } else if ( $method === 'GET' ) {
    $mail->Subject = trim($_GET["project_name"]);
    $mail->Body    = trim($_GET["form_subject"]) . '<br>
      - Имя: ' . htmlspecialchars(stripslashes($_GET['name'])) . '<br>
      - Телефон: ' . htmlspecialchars(stripslashes($_GET['phone'])) . '<br>
      - Email: ' . htmlspecialchars(stripslashes($_GET['email'])) . '<br>
      - Сообщение: ' . htmlspecialchars(stripslashes($_GET['message'])) . '<br>
      - Formcheck: ' . $_GET['formcheck'] . 'Yes';
    $arrayfield = array(
      $_GET["target_text"],
      $_GET["target_page-text"],
      $_GET["target_page-number"],
      $_GET["target_page-email"],
      $_GET["target_page-phone"]
    );
    $spam = implode("", array_map("strval", $arrayfield));
  }

  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  $mail->ErrorInfo = 'Хрен вам, а не письма!';

  if (empty($spam)){
    $mail->send();
    echo 'Сообщение отправлено';
  } else {
    echo 'Warning, spam!';
    exit;
  }

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
