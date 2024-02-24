<?php 

    $nama=@$_REQUEST["nama"];
    $jenis=@$_REQUEST["jenis"];
    $tanggal=@$_REQUEST["tanggal"];
    $kategori=@$_REQUEST["kategori"];
    $kelas=@$_REQUEST["kelas"];
    $fisik=@$_REQUEST["fisik"];
    $pembayaran=@$_REQUEST["pembayaran"];
    $diskon=0;
    $harga=0;
    
    if ($kategori == "sepak bola") {
        if ($kelas == "pemula") {
            $harga = 200000;
        } else if ($kelas == "menengah") { 
            $harga = 250000;
        } else if ($kelas == "lanjutan") {
            $harga = 300000;
        }

    } else if ($kategori == "bulu tangkis") {
        if ($kelas == "pemula") {
            $harga = 150000;
            if ($jenis == "perempuan") {
                $diskon = $harga * 0.1;                
            }
        } else if ($kelas == "menengah") { 
            $harga = 200000;
            if ($jenis == "perempuan") {
                $diskon = $harga * 0.1;                
            }
        } else if ($kelas == "lanjutan") {
            $harga = 250000;
            if ($jenis == "perempuan") {
                $diskon = $harga * 0.1;                
            }
        }

    } else if ($kategori == "renang") {
        if ($kelas == "pemula") {
                $harga = 200000;
        } else if ($kelas == "menengah") { 
                $harga = 250000;
        } else if ($kelas == "lanjutan") {
                $harga = 300000;
        }

    } else {
        $kategori = "anda tidak memiliki kategori";
    }

    echo "Nama   :$nama <br>";
    echo "Jenis kelamin   :$jenis <br>";
    echo "Tanggal lahir   :$tanggal <br>";
    echo "Kategori olahraga   :$kategori <br>";
    echo "pilihan Kelas   :$kelas <br>";
    echo "Kemampuan fisik   :$fisik <br>";
    echo "Pembayaran   :$pembayaran <br>";  
    echo "Harga   :$harga <br>" ;
    echo "Diskon   :$diskon <br>" ;
    
?>