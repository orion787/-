<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "oleg-gusev-0421@mail.ru";
    $subject = "Сообщение с формы обратной связи";
    $body = "Имя: $name\nТелефон: $phone\nE-mail: $email\nСообщение:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный метод отправки формы.";
}
?>