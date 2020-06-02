<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output
/*
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'XXXXXX@gmail.com';                 // Наш логин
$mail->Password = 'XXXXXX';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('XXXXXX@gmail.com', 'Leadership_website');   // От кого письмо 
*/
$mail->setFrom('info@leadershipnt.com', 'Leadership_website'); 
$mail->addAddress('leadershipnt@gmail.com');     // Add a recipient
$mail->addAddress('eubranch@leadershipnt.com');   
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '<br>
	E-mail: ' . $email . ' <br>
	Запрос: ' . $text . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>
