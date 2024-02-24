<?php

    $nama=$_REQUEST["nama"];
    $email=$_REQUEST["email"];
    $usia=$_REQUEST["usia"];
    $tl=$_REQUEST["tanggal_lahir"];
    $almt=$_REQUEST["alamat"];
    $jk=$_REQUEST["jenis_kelamin"];
    $stt=$_REQUEST["status"];
    $hbi=$_REQUEST["hobi"];

    echo "Nama : $nama <br>";
    echo "Email : $email <br>";
    echo "Usia : $usia <br>";
    echo "Tanggal Lahir : $tl <br>";
    echo "Alamat : $almt <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Status : $stt <br>";
    echo "Hobi : $hbi";

?>

