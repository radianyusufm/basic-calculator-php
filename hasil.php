<?php

include_once 'aritmatika.class.php';

if (isset($_POST['submit'])) {

  $operator = $_POST['operator'];
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];

  //set value 0 jika inputan kosong
  if (empty($number1) && empty($number2)) {
    $number1 = 0;
    $number2 = 0;
  }

  $aritmatika = new Aritmatika($operator, $number1, $number2);
  echo $aritmatika->hitungAritmatika();

} else {

  header('Location: index.php');
}


 ?>
