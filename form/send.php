<?php
// Файлы phpmailer
// require 'class.phpmailer.php';
// require 'class.smtp.php';

// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $company = $_POST['company'];
// $message = $_POST['iwant'];

$client = new MongoDB\Client(
    'mongodb+srv://rinat:1q2w3e4r@cluster0.3pozm.mongodb.net/figjam-emails?retryWrites=true&w=majority'
 );


$collection = $client->figjam_emails->emails;

$entityBody = file_get_contents('php://input');

$insertOneResult = $collection->insertOne(['email' => $entityBody]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
var_dump($insertOneResult->getInsertedId());

var_dump($entityBody)

// Настройки
// $mail->isSMTP(); 
// $mail->Host = 'smtp.yandex.ru';  
// $mail->SMTPAuth = true;                      
// $mail->Username = 'reddes-site'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
// $mail->Password = 'lociya14'; // Ваш пароль
// $mail->SMTPSecure = 'ssl';                            
// $mail->Port = 465;
// $mail->setFrom('reddes-site@yandex.ru'); // Ваш Email
// $mail->addAddress('workbigbox@yandex.ru'); // Email получателя


// // Прикрепление файлов
//   for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
//         $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
//         $filename = $_FILES['userfile']['name'][$ct];
//         if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
//             $mail->addAttachment($uploadfile, $filename);
//         } else {
//             $msg .= 'Failed to move file to ' . $uploadfile; 
//         }
//     }   
                                 
// // Письмо
// $mail->isHTML(true); 
// $mail->Subject = "Обратная связь"; // Заголовок письма
// $mail->Body    = "Имя: $name <br>Телефон: $phone <br>Почта: $email <br>Компания: $company <br>Сообщение: $message"; // Текст письма

// // Результат
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'ok';
// }
?>