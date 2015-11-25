<?php

REQUIRE_ONCE("libs/class.phpmailer.php");
REQUIRE_ONCE("libs/class.smtp.php");

Class ContactoModel {

function enviarEmail($email, $asunto, $consulta){
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'probandoenviarmails@gmail.com';
$mail->Password = '123456789@a';
$mail->SetFrom('probandoenviarmails@gmail.com', 'Lima & Limon');
$mail->Subject = $asunto;
$mail->Body = $email . " Consulta: " . $consulta;
$mail->AddAddress('fernandoochoteco@gmail.com');
$mail->Send();
}

}

?>
