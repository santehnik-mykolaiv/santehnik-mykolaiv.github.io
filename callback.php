<?php

$phone = $_POST['phone'] ?? 'Не указан';
$time = date("H:i d.m.Y");

$botToken = "7518149404:AAG2g0767LJcKNqfGzk9f_o5Gs33MJdeIRM";
$chatId = "2019416663";

$message = "
📞 НОВАЯ ЗАЯВКА сантехник ник гит
----------------------
📱 Телефон: $phone
🕒 Время: $time
";

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
'chat_id' => $chatId,
'text' => $message
];

$options = [
'http' => [
'method' => 'POST',
'header' => "Content-Type:application/x-www-form-urlencoded",
'content' => http_build_query($data)
]
];

$context = stream_context_create($options);
file_get_contents($url, false, $context);

header("Location: /thanks.html");
exit;

?>
