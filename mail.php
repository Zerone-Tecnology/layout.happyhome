<?php
$method = $_SERVER['REQUEST_METHOD'];
if ( $method === 'POST' ) {
	$frm_name  = "Регистрация на Розыгрыш автомобиля";
	$recepient = "no-reply@happyhome.kz";
	$sitename  = "Happy Home";
	$subject   = "Регистрация на Розыгрыш автомобиля с сайта \"$sitename\"";
	$admin_email  = 'marketing@happyhome.kz';

	$name = trim($_POST["name"]);
	$sname = trim($_POST["sname"]);
	$phone = trim($_POST["phone"]);

	$message = "
	<tr>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>ФИО</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td>
	</tr>
	<tr>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Фамилия</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$sname</td>
	</tr>
	<tr>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>
	</tr>
	<tr>
		";

	$message = "<table style='width: 100%;'>$message</table>";

	if(!mail($admin_email, $subject, $message, "From: $recepient" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"")){echo ":(";};
} else {
	echo "Ошибка при отправке формы, пожалуйста повторите";
}