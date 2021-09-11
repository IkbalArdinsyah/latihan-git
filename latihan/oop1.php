<?php
    class kucing{
        public  $warna = "coklat";
        public $jumlahKaki = "4";
        public  $jenisBulu = "panjang";
        public  $makanaFavorit = "Ikan pindang";

        public function bersuara()
        {
            return "meowng...meowng...meowng...";
        }

        public function berbulu();
        {
            return "berbulu ikan";
        }
    }

    $kucing1 = new Kucing();
    echo $kucing1->warna; " $kucing1->warna. "<br>";
    echo $kucing1->bersuara; "$kucing1(). "<hr>";

    $kucing2 = new Kucing();
    echo $kucing1->warna; " $kucing2->warna. "<br>";
    echo $kucing1->bersuara; "$kucing2(). "<hr>";

}