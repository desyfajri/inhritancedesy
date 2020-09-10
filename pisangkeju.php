<?php
    // contoh parents
    class pisangkeju{
        public $pisang, $keju;

        public function resep(){
          return "mengenyangkan";
        }
    }
    // chill
        class pisang extends pisangkeju{
            public $coklat = false;

            public function aktifkancoklat(){
                $this->coklat=true;
                return "pisang coklat jadi";


            }
        }

        $makanan1 = new pisang();
        echo $makanan1->resep();
        echo "<br>";
        echo $makanan1->aktifkancoklat();
        ?>
