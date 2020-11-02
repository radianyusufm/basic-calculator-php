<?php

include_once 'aritmatika.class.php';

$operator = $_POST['operator'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

$aritmatika = new Aritmatika($operator, $number1, $number2);
echo $aritmatika->hitungAritmatika();

 ?>
