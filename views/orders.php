<?php

  /* if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phonenum'])&&$_POST['phonenum']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'vzxxl@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phonenum'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}*/


    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $phone = trim($_POST["phonenum"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) ) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Какое-то из полей не было заполнено!";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "vzxxl@yandex.ru";

        // Set the email subject.
        $subject = "Новая заявка с AndrianaStyle от $name";

        // Build the email content.
        $email_content = "Имя: $name\n";
        $email_content .= "Телефон: $phone\n";

        // Build the email headers.
        $email_headers = "From: $name";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо за обращение! Заявка отправлена!";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Не удалось отправить заявку! Попробуйте перезагрузить страницу и попробовать еще раз!";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Ошибка отсылки данных! Попробуйте перезагрузить страницу и отправить еще раз!";
    }

?>