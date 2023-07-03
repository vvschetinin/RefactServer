<?php

$method = $_SERVER['REQUEST_METHOD'];

// Script Foreach
$c = true;
if ( $method === 'POST' ) {

$message = "";
$project_name = trim($_POST["project_name"]);
$form_subject = trim($_POST["form_subject"]);
$admin_email  = "info@vschetinin.ru";
$spam = $_POST["target_text"];

foreach ( $_POST as $key => $value ) {
	$value = htmlspecialchars(stripslashes($value));
	if ( $value != "" && $key != "target_text" && $key != "project_name" && $key != "form_subject" ) {
		$message .= ( ($c = !$c) ? ' ':'' ) . "
			<div style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></div>
			<div style='padding: 10px; border: #e9e9e9 1px solid;'>$value</div></li>";
	}
}

} else if ( $method === 'GET' ) {

	$message = "";
	$project_name = trim($_GET["project_name"]);
	$form_subject = trim($_GET["form_subject"]);
	$admin_email  = "info@vschetinin.ru";
	$spam = $_GET["target_text"];

	foreach ( $_GET as $key => $value ) {
		$value = htmlspecialchars(stripslashes($value));
		if ( $value != "" && $key != "target_text" && $key != "project_name" && $key != "form_subject" ) {
			$message .= ( ($c = !$c) ? '<li>':'<li style="background-color: #f8f8f8;">' ) . "
				<div style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></div>
				<div style='padding: 10px; border: #e9e9e9 1px solid;'>$value</div></li>";
		}
	}
}

// Проверка на спам
if (empty($spam)){

//=========================================================

$message = "<ul style='width: 100%;'>$message</ul>";

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;

$success = mail($admin_email, adopt($form_subject), $message, $headers);

$result_yes = 	'Сообщение отправлено!';
$result_no = 	'Сообщение не отправлено!';

if ($success) {
	$result_form = $result_yes;
	}
else {
	$result_form = $result_no;
}

echo $result_form;

//=========================================================

} else {
	$result_form = 	'Внимание, спам!';
	echo $result_form;
}

?>
