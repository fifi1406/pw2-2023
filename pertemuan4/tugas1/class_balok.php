<?php
    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
        
        public function __construct($p=1, $l=1, $t=1) {
		    $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }
    
        // Method untuk menghitung luas balok dengan rumus: L= 2(pl+lt+pt)
        public function getLuas() {
            return 2 * ($this->panjang * $this->lebar + $this->lebar * $this->tinggi + $this->panjang * $this->tinggi);

		}
    
        // Method untuk menghitung keliling balok: K = 4(p+l+t)
        public function getKeliling() {
            return 4 * ($this->panjang + $this->lebar + $this->tinggi );

        }
    
        // Method untuk menghitung Volume balok: V = p*l*t
        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;

        }
    }
?>