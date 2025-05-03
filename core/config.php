<?php

// и если true(то есть константа определена) (то есть доступ получен с index.php(через require_once), а не просто через url), то он пропустит выполнение кода
// в этом файле
defined('VG_ACCESS') or die('Access denied');
echo 'Hello';