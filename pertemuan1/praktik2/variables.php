<?php
    /*
        Variable Sistem 
        Variable built in PHP (variabel yang sudah ada di php)
    */

    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';

    /*
        Variabel User
        Variabel yang dibuat oleh user
    */
    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    $name = 'Akmal';

    echo "Nama saya adalah $name";
    /*
        Variabel konstan
        Variabel yang tidak bisa diubah nilainya
        1. Menggunakan define   | define('fruit',"Apel");
        2. Menggunakan const    | const fruit = "Apel";
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    echo SITE_NAME;


?>