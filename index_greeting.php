<?php
 
 function greeting($name, $day) {

    switch ($day) {
    case 1:
        echo "Привет $name! Хорошего и продуктивного рабочего дня!";
        break;
    case 2:
        echo "Привет $name! Хорошего и продуктивного рабочего дня!";
        break;
    case 3:
        echo "Привет $name! Хорошего и продуктивного рабочего дня!";
        break;
    case 4:
        echo "Привет $name! Хорошего и продуктивного рабочего дня!";
        break;
    case 5:
        echo "Привет $name! Хорошего и продуктивного рабочего дня!";
        break;
    case 6:
        echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";    
        break;
    case 7:
        echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
        break;
    default:
        echo "Не понятно, выходной или рабочий, хорошего настроения в этот день!";
        break;
   }
 }
  

  greeting("Анатолий", 6);

  print_r($_GET);

?>
