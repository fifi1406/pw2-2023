<?php 
        require_once 'class_balok.php';

        //Object pertama
        $balok1 = new balok( 29, 16, 7 );

        echo "Balok Pertama : <br><br>";
        echo "Luas Balok 1 = " . $balok1->getLuas(). "<br>";
        echo "Keliling Balok 1 = " . $balok1->getKeliling(). "<br>";
        echo "Volume Balok 1 = " . $balok1->getVolume(). "<br><br>";

        //Object Kedua
        $balok2 = new balok( 14, 6, 20 );

        echo "Balok Kedua : <br><br>";
        echo "Luas Balok 2 = " . $balok2->getLuas(). "<br>";
        echo "Keliling Balok 2 = " . $balok2->getKeliling(). "<br>";
        echo "Volume Balok 2 = " . $balok2->getVolume(). "<br><br>";

        //Object Ketiga
        $balok3 = new balok( 13, 1, 21 );

        echo "Balok Ketiga : <br><br>";
        echo "Luas Balok 3 = " . $balok3->getLuas(). "<br>";
        echo "Keliling Balok  = " . $balok3->getKeliling(). "<br>";
        echo "Volume Balok 3 = " . $balok3->getVolume(). "<br><br>";

        //Object Keempat
        $balok4 = new balok( 9, 1, 4 );

        echo "Balok Ke Empat : <br><br>";
        echo "Luas Balok 4 = " . $balok4->getLuas(). "<br>";
        echo "Keliling Balok 4 = " . $balok4->getKeliling(). "<br>";
        echo "Volume Balok 4 = " . $balok4->getVolume(). "<br><br>";

?>