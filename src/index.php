<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/database.php';
require __DIR__.'/types.php';


if (!in_array('-id',$argv)) {
    var_dump('Укажите номер клиента в формате -id some_id');
}

$client = $DB->query('select * from users where id = ?',[$argv[2]]);


if (!$client) {
    var_dump('Клиент с таким номером не существует');
}


if (!in_array('-type',$argv)) {
    var_dump('Укажите формат уведомления в виде -format (email or sms)"');
}

$notify_type = $argv[4];
if (!in_array($notify_type, $types)) {
    var_dump('Такого типа уведомлений не существует');
}


switch ($notify_type) {
    case 'email':
        Mailer::sendEmail();
    case 'sms':
        Sms::sendSms();
}

var_dump('Уведомление отправлено!');


