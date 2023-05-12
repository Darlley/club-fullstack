<?php

// function send($data)
// {
    // $subject = "{$data->name} esta testando envio de e-mail via PHP";
    // $message = $data->about;
    // $headers = 'From: webmaster@example.com' . "\r\n" .
    // 'Reply-To: webmaster@example.com' . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    // return mail($to, $subject, $message, $headers);
// }

function send(array $data) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'plain';
    $email->Host = 'sandbox.smtp.mailtrap.io';
	$email->isSMTP();
	$email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = '51e61aa886569a';
    $email->Password = 'a7ec2168952cfc';


	$email->isHTML(true);
	$email->setFrom('darlleybrito@gmail.com');
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();
}