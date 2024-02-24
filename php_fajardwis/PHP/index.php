<?php
    $nama = "ahoy bada";
    $umur = 15;
    $nilai = 86.5;
    $status = false;

    echo "Nama : $nama <br>";
    echo "Umur : $umur <br>";
    printf("Nilai : %.3f <br>", $nilai);
    if ($status) {
        echo "status siswa aktif";
    } else {
        echo "status siswa tidak aktif";
    }
?>