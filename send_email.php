<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ivanchikov.dmitry1990@gmail.com";
    $subject = "Новое сообщение от $name";
    $body = "Имя: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "<p>Сообщение успешно отправлено!</p>";
    } else {
        echo "<p>Что-то пошло не так. Попробуйте отправить сообщение позже.</p>";
    }
}
?>
