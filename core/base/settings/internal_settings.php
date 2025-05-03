<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATES = 'core/admin/views/';

const COOKIE_VERSION = '1.0.0'; // нужен для того, чтобы заставлять пользователей перелогиниться, если у нас чтото кардинально поменялось на сайте


const CRYPT_KEY = '';
const COOKIE_TIME = 60; // разрешенное время бездействия, 60 минут пройдет, его разлогинит, и надо заново войти
const BLOCK_TIME = 3; // три раза если пользователь неправильно ввел пароль, блокируем пользователя


const QTY = 8; // по умолчанию отображаем 8 товаров 
const QTY_LINKS = 3;


const ADMIN_CSS_JS = [

    'styles' => [],
    'scripts' => []

]; // пути js и css файлов необходимых для работы админ. панели


const USER_CSS_JS = [

    'styles' => [],
    'scripts' => []

]; // пути js и css файлов необходимых для работы пользовательской части сайта