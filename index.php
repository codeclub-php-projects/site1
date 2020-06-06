<?php

// Front Controller
// ----------------

// 1 -> Включение сеанса
session_start();

// 2 -> Идетнификация запрашиваемой страницы
$page_id = 'main';
if (isset($_GET['id'])) {
	$page_id = $_GET['id'];
}

// 3 -> Идентификация пользователя
$page_user = 'Гость';
if (isset($_SESSION['user'])) {
	$page_user = $_SESSION['user'];
}

// 4 -> Загрузка шаблонов
include('app/pages/'.$page_id.'.php');
include('sys/tpl/base.php');
