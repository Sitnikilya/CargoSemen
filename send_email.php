<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $links = $_POST['link'];
    $colors = $_POST['color'];
    $sizes = $_POST['size'];
    $quantities = $_POST['quantity'];
    $prices = $_POST['price'];

    $message = "Телефон: $phone\n\n";
    $message .= "Детали заказа:\n";

    for ($i = 0; $i < count($links); $i++) {
        $message .= "Товар " . ($i + 1) . ":\n";
        $message .= "Ссылка: " . $links[$i] . "\n";
        $message .= "Цвет: " . $colors[$i] . "\n";
        $message .= "Размер: " . $sizes[$i] . "\n";
        $message .= "Количество: " . $quantities[$i] . "\n";
        $message .= "Цена: " . $prices[$i] . "\n\n";
    }

    $to = "sirsit2@gmail.com";
    $subject = "Новый заказ с сайта";
    $headers = "From: no-reply@cargo633.ru";

    if (mail($to, $subject, $message, $headers)) {
        echo "Заказ успешно отправлен!";
    } else {
        echo "Ошибка при отправке заказа.";
    }
}
?>
