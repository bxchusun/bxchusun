<?php

header ('Content-type: text/html; charset=utf-8');

$iLen = strip_tags($_GET['dl']);
$sOut = '';

//~~~~~~~~~~~

$f = fopen('https://bxchusun.github.io/le-huong-van/DB.DAT', 'r');
$sRead_DB_Server = fread($f, filesize('https://bxchusun.github.io/le-huong-van/DB.DAT'));
fclose($f);


if (mb_strlen ($sRead_DB_Server, 'UTF-8') <> $iLen) {$sOut .= '[//Data//]' . PHP_EOL . $sRead_DB_Server . PHP_EOL . '[//Data//]';}
if ($sOut == '' ) $sOut = '0';
echo $sOut;
?>