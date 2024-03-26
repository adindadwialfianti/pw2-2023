<?php

    class HariRaya {
        protected $agama;
        protected $tanggal;

        protected function __construct ($agama, $tanggal) {
            $this -> agama = $agama;
            $this -> tanggal = $tanggal;
        }
        protected function getInfo(){
            echo 'Hari Raya ini dirayakan oleh Agama :'. $this -> agama . '<br>';
            echo 'Pada tanggal :'. $this -> tanggal . '<br>';
                     
        }
    }

    class IedulFitri extends HariRaya {
        public $ibadah;

        public function __construct($agama, $tanggal, $ibadah) {
            parent::__construct($agama, $tanggal, $ibadah);
            $this -> ibadah = $ibadah;
        }

        public function getInfoIedulFitri() {
            parent::getInfo();
            echo 'Ibadah yang dijalankan oleh Agama ini : ' . $this -> ibadah. '<br>';
        }
    }
    class Natal extends HariRaya {
        public $ibadah2;

        public function __construct($agama, $tanggal, $ibadah2) {
            parent::__construct($agama, $tanggal, $ibadah2) ;
            $this -> ibadah2 = $ibadah2;
        }

        public function getInfoNatal() {
            parent::getInfo();
            echo 'Ibadah yang dijalankan oleh Agama ini : ' . $this-> ibadah2. '<br>';
        }
    }
    class Imlek extends HariRaya {
        public $ibadah3;

        public function __construct($agama, $tanggal, $ibadah3) {
            parent::__construct($agama, $tanggal, $ibadah3) ;
            $this -> ibadah3 = $ibadah3;
        }

        public function getInfoImlek() {
            parent::getInfo();
            echo 'Ibadah yang dijalankan oleh Agama ini : ' . $this-> ibadah3. '<br>';
        }
    }

?>