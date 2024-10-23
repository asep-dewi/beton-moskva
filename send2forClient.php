<?php

require_once('phpmailer/PHPMailerAutoload.php');

//error_reporting(E_ALL); ini_set('display_errors', '1');

$mail = new PHPMailer;

$from = $_POST['contactFF'];
$form_name = '';
$message = '';


switch ($_POST['name-form']) {
  case 'send_request' :
    $form_name = 'Отправить заявку';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'] . "\nАдрес: " . $_POST['adressFF'] . "\nEmail: " . $_POST['emailFF'];
    break;
  case 'back_call' :
    $form_name = 'Обратный звонок';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'];
    break;
  case 'ask-question' :
    $form_name = 'Задать вопрос';
    $message = "Имя: " . $_POST['nameFF'] . "\n" . $from . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nТелефон: " . $_POST['telFF'] . "\nАдрес: " . $_POST['adressFF'] . "\nEmail: " . $_POST['emailFF'] . "\nСообщение: " . $_POST['textareaQuestion'];
    break;
  default: $form_name = '';
}


$date = date("d-m-Y");
$phone = $_POST['tel'];
$postName = $_POST['name'];

$comment = $_POST['comment'];
$email_adress = $_POST['email_adress'];

$bonus_code = $_POST['bonus_code'];

$message = "\nДата: " . $date;

if (isset($email_adress) && !isset($phone)) {
//  $messageBonusForClient = "Здравствуйте, рады Вам предоставить купон на скидку. Для получения скидки продиктуйте код нашему оператору. \nКод: " . $bonus_code;
  $messageBonusForClient = '<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <title></title>
  <!--[if (mso 16)]>
  <style type="text/css">
    a {text-decoration: none;}
  </style>
  <![endif]-->
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
  <!--[if gte mso 9]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG></o:AllowPNG>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->
</head>

<body>
<div class="es-wrapper-color">
  <!--[if gte mso 9]>
  <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
    <v:fill type="tile" color="#f6f6f6"></v:fill>
  </v:background>
  <![endif]-->
  <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
      <td class="esd-container-frame" width="520" valign="top" align="center">
        <table width="100%" cellspacing="0" cellpadding="0">
          <tbody>
          <tr>
            <td class="esd-block-text" align="center">
              <p style="color: #2c2c2c; font-size: 24px;">Здравствуйте, рады Вам предоставить купон на 15% скидку от <a  href="https://xn--90aiydt.xn--80adxhks/">бетон.москва</a><br></p>
              <p style="color: #4d4d4d; font-size: 18px;">Для получения скидки  продиктуйте код оператору.</p>
               <p style="font-size: 16px">Код: <span style="color: #1155cc; font-size: 26px">' . $bonus_code . '</span></p>
            </td>
          </tr>
          </tbody>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
</div>
</body>
</html>';
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
$mail->addAddress($email_adress);

$mail->isHTML(true);
$mail->Subject = "Купон на скидку от бетон.москва";
$mail->Body = "$messageBonusForClient";
$mail->AltBody = '';


if (!$mail->send()) {
  echo $mail->ErrorInfo;
} else {
  echo 'good';
}



