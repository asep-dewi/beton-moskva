<?php

require_once('phpmailer/PHPMailerAutoload.php');

//error_reporting(E_ALL); ini_set('display_errors', '1');

$mail = new PHPMailer;

$from = $_POST['contactFF'];
$form_name = '';
$message = '';


switch ($_POST['name-form']) {
  case 'send_request':
    $form_name = 'Отправить заявку';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'] . "\nАдрес: " . $_POST['adressFF'] . "\nEmail: " . $_POST['emailFF'];
    break;
  case 'back_call':
    $form_name = 'Обратный звонок';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'];
    break;
  case 'ask-question':
    $form_name = 'Задать вопрос';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'] . "\nАдрес: " . $_POST['adressFF'] . "\nEmail: " . $_POST['emailFF'] . "\nСообщение: " . $_POST['textareaQuestion'];
    break;
  default:
    $form_name = '';
}


$date = date("d-m-Y");
$phone = $_POST['tel'];
$postName = $_POST['name'];

$comment = $_POST['comment'];
$text_review = $_POST['text_review'];
$email_adress = $_POST['email_adress'];
$beton_volume = $_POST['beton_volume'];

$select_beton = $_POST['select_beton'];
$select_massa = $_POST['select_massa'];
$select_marka = $_POST['select_marka'];
$text_question = $_POST['text_question'];
$bonus_code = $_POST['bonus_code'];

$message = "\nДата: " . $date;

//if (isset($email_adress) && !isset($phone)) {
//  $bonus_code = 999;
//  $messageBonus = "\nДата: " . $date . ", \nКупон: " . $bonus_code . ", \nEmail: " . $email_adress;
//  $messageBonusForClient = "\nДата: " . $date . ", \nВаш купон для получения скидки: " . $bonus_code;
//  echo '5555';
//}


if (isset($phone)) {
  $message .= ", nТелефон: " . $phone;
}

if (isset($postName)) {
  $message .= ", \nИмя: " . $postName;
}
if (isset($comment)) {
  $message .= ", \nКомментарий: " . $comment;
}
if (isset($text_review)) {
  $message .= ", \nТекст отзыва: " . $text_review;
}
if (isset($email_adress)) {
  $message .= ", \nEmail: " . $email_adress;
}
if (isset($beton_volume)) {
  $message .= ", \nКоличество бетона: " . $beton_volume;
}
if (isset($select_beton)) {
  $message .= ", \nБетона: " . $select_beton;
}
if (isset($select_marka)) {
  $message .= ", \nМарка: " . $select_marka;
}
if (isset($select_massa)) {
  $message .= ", \nОбъем, м3: " . $select_massa;
}
if (isset($text_question)) {
  $message .= ", \nТекст вопроса, м3: " . $text_question;
}
if (isset($bonus_code)) {
  $message .= ", \nКупон: " . $bonus_code;
}

$mail->CharSet = "utf-8";
$name = 'Ivan';
$phone = 'Razin';


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'beton.moskva.ru@gmail.com';
$mail->Password = '14r56!er$';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

//$mail->setFrom('topline.moscow.s@gmail.com', 'Top-Line');
$mail->From = "beton.moskva.ru@gmail.com";
$mail->FromName = "Бетон.москва";
//$mail->addAddress('topline.moscow.s@gmail.com');
$mail->addAddress('igoschinilia@yandex.ru');
$mail->addAddress('kosh-ilya@mail.ru');
//    $mail->addAddress('777goldenfish@gmail.com');

$mail->isHTML(true);
$mail->Subject = "Сообщение с формы $form_name";
$mail->Body = "$message";
$mail->AltBody = '';


if (!$mail->send()) {
  echo $mail->ErrorInfo;
} else {
  echo 'good';
}
