<?php

    class Aritmatika
    {
       public $operator;
       public $number1;
       public $number2;

       public function __construct($operator, $number1, $number2) {
         $this->operator = $operator;
         $this->number1 = $number1;
         $this->number2 = $number2;
       }

       public function hitungAritmatika() {
         switch ($this->operator) {
           case 'tambah':
             $result = $this->number1 + $this->number2;
             break;

           case 'kurang':
             $result = $this->number1 - $this->number2;
             break;

           case 'bagi':

              if ($this->number2 == 0) {
                $result = "tidak bisa dibagi dengan 0";
              } else {
                $result = $this->number1 / $this->number2;
              }

             break;

          case 'kali':
            $result = $this->number1 * $this->number2;
            break;

          case 'modulo':
              if ($this->number2 == 0) {
                $result = "tidak bisa modulo dengan 0";
              } else {
                $result = $this->number1 % $this->number2;
              }

              break;

           default:
           $result = "ERROR";
             break;
         }

         return $result;
       }


    }

 ?>
