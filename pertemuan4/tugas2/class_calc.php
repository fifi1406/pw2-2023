<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class calculator {

        private $x, $y;

        public function __construct($x, $y) {
            $this->x = $x;
            $this->y = $y;
        }

        // Method lainnya
        public function Pertambahan(){
            return $this->x + $this->y;
        }

        public function Pengurangan(){
            return $this->x - $this->y;
        }

        public function Pembagian(){
            return $this->x / $this->y;
        }

        public function Perkalian(){
            return $this->x * $this->y;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new calculator(10, 5);

    echo "Jumlah Pertambahan = " . $calculator->Pertambahan()."<br>";
    echo "Jumlah Pengurangan = " . $calculator->Pengurangan()."<br>";
    echo "Jumlah Pembagian = " . $calculator->Pembagian()."<br>";
    echo "Jumlah Perkalian = " . $calculator->Perkalian()."<br>";
?>