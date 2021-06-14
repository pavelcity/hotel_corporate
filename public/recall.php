<?php




$whatForm = '';
if (isset($_POST['whatForm'])) {
	$whatForm = $_POST['whatForm'];
}

$whatNomer = '';
if (isset($_POST['whatNomer'])) {
	$whatNomer = $_POST['whatNomer'];
}

$dateentertwo = '';
if (isset($_POST['dateentertwo'])) {
	$dateentertwo = $_POST['dateentertwo'];
}


$name = '';
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}

$phone = '';
if (isset($_POST['phone'])) {
	$phone = $_POST['phone'];
}


$email = '';
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}

$dateModal = '';
if (isset($_POST['dateModal'])) {
	$dateModal = $_POST['dateModal'];
}

$days = '';
if (isset($_POST['days'])) {
	$days = $_POST['days'];
}

$message = '';
if (isset($_POST['message'])) {
	$message = $_POST['message'];
}





$dateenter = '';
if (isset($_POST['dateenter'])) {
	$dateenter = $_POST['dateenter'];
}

$dateout = '';
if (isset($_POST['dateout'])) {
	$dateout = $_POST['dateout'];
}

$adult = '';
if (isset($_POST['adult'])) {
	$adult = $_POST['adult'];
}

$children = '';
if (isset($_POST['children'])) {
	$children = $_POST['children'];
}













$who = $whatForm;

$sendinfo = ($who) ? $who : '';
$sendinfo .= ($name) ? '%0A' . '<b>Имя:</b> ' . $name . '%0A' : '';
$sendinfo .= ($phone) ? '<b>Телефон:</b> ' . $phone . '%0A' : '';
$sendinfo .= ($email) ? '<b>email:</b> ' . $email . '%0A' : '';
$sendinfo .= ($whatNomer) ? '<b>Номер: </b> ' . $whatNomer . '%0A' : '';
$sendinfo .= ($dateentertwo) ? '<b>Даты: </b> ' . $dateentertwo . '%0A' : '';
$sendinfo .= ($dateModal) ? '<b>Заезд: </b> ' . $dateModal . '%0A' : '';
$sendinfo .= ($days) ? '<b>Кол-во дней: </b> ' . $days . '%0A' : '';
$sendinfo .= ($message) ? '<b>Сообщение: </b> ' . $message . '%0A' : '';
$sendinfo .= ($dateenter) ? '<b>Дата заезда: </b> ' . $dateenter . '%0A' : '';
$sendinfo .= ($dateout) ? '<b>Дата выезда: </b> ' . $dateout . '%0A' : '';
$sendinfo .= ($adult) ? '<b>Взрослых: </b> ' . $adult . '%0A' : '';
$sendinfo .= ($children) ? '<b>Детей: </b> ' . $children . '%0A' : '';









$token = '1754861255:AAFiUsgJ-TsrcthrUVYMrvnaD4201hwNdxY';
$chat_id = '-566347952';


$txt = $sendinfo;
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");







$sendinfo2 = ($who) ? $who : '';
$sendinfo2 .= ($name) ? '<br>' . '<b>Имя: </b> ' . $name : '';
$sendinfo2 .= ($phone) ? '<br>' . '<b>Телефон: </b> ' . $phone : '';
$sendinfo2 .= ($email) ? '<br>' . '<b>email: </b> ' . $email : '';
$sendinfo2 .= ($dateModal) ? '<br>' . '<b>Заезд: </b> ' . $dateModal : '';
$sendinfo2 .= ($whatNomer) ? '<br>' . '<b>Номер: </b> ' . $whatNomer : '';
$sendinfo2 .= ($message) ? '<br>' . '<b>Сообщение: </b> ' . $message : '';
$sendinfo2 .= ($dateEnter) ? '<br>' . '<b>Дата заезда: </b> ' . $dateEnter : '';
$sendinfo2 .= ($dateEnd) ? '<br>' . '<b>Дата выезда: </b> ' . $dateEnd : '';





$to = "pavel32104@yandex.ru";
$subject = 'форма обратной связи  ';
$massage = $sendinfo2;
$headers = "Content-type: text/html; charset=utf-8\r\n";

mail($to, $subject, $massage, $headers);
