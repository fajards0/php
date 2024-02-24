<?php

class contoh{

    public function __construct(){
        echo "Assalamu'alaikum <br>";
    }

    public function perkenalan(){
        echo "Nama saya bubur <br>";
    }
    
    public function __destruct(){
        echo "Dan saya makanan";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();

?>