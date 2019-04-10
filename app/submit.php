<?php

        $mail_address = 'daddudota22@yandex.ru';
        $theme = 'Заказ с сайта Folfie';

        $letter = "Имя: \t\t\t".$_POST["name"]."\r\n";
        $letter .= "Телефон:\t\t".$_POST["tel"]."\r\n";
        $letter .= "Заказ:\t\t\t".$_POST["order"]."\r\n";
        $letter .= "Заказ на дату:\t".$_POST["date"]."\r\n";
        $letter .= "Заказ на время:\t".$_POST["time"]."\r\n";

        mail($mail_address,$theme,$letter);
