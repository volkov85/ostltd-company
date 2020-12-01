<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host       = 'ostltd.kz'; // SMTP сервера вашей почты
    $mail->Username   = 'admin@ostltd.kz'; // Логин на почте
    $mail->Password   = 'vnW$7v09'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 25;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->CharSet = "utf-8";

    $mail->setFrom('admin@ostltd.kz'); // Gmail address which you used as SMTP server
    $mail->addAddress('admin@ostltd.kz'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Письмо с сайта ostltd.kz';
    $mail->Body = "<h3>Имя клиента: $name <br>Email клиента: $email <br>Сообщение : $message</h3>";

    //Получаем пост от recaptcha
    $recaptcha = $_POST['g-recaptcha-response'];

    //Сразу проверяем, что он не пустой
    if(!empty($recaptcha)) {
        //Получаем HTTP от recaptcha
        $recaptcha = $_REQUEST['g-recaptcha-response'];
        //Сюда пишем СЕКРЕТНЫЙ КЛЮЧ, который нам присвоил гугл
        $secret = '6LcXmvQZAAAAAPgQBuOqdt8Vj5zMJmmIZ5E0ylH-';
        //Формируем utl адрес для запроса на сервер гугла
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];

        //Инициализация и настройка запроса
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        //Выполняем запрос и получается ответ от сервера гугл
        $curlData = curl_exec($curl);

        curl_close($curl);
        //Ответ приходит в виде json строки, декодируем ее
        $curlData = json_decode($curlData, true);

        //Смотрим на результат
        if($curlData['success']) {
            //Сюда попадем если капча пройдена, дальше выполняем обычные
            //действия(добавляем коммент или отправляем письмо) с формой
            $mail->send();
            $alert = '<div class="alert-success">
                         <span>Cообщение отправлено!</span>
                         <p class="alert__close">Закрыть</p>
                        </div>';
            } else {
            //Капча не пройдена, сообщаем пользователю, все закрываем стираем и так далее
            $alert = '<div class="alert-error">
                        <span>Проверка не пройдена!</span>
                        <p class="alert__close">Закрыть</p>
                      </div>';
        }
    }
    else {
        //Капча не введена, сообщаем пользователю, все закрываем стираем и так далее
        $alert = '<div class="alert-error">
                    <span>Поставьте галочку "Я не робот"!</span>
                    <p class="alert__close">Закрыть</p>
                  </div>';
    }
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
                <p class="alert__close">Закрыть</p>
              </div>';
  }
}
?>
