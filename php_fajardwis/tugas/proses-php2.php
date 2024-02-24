<?php
    $nama=$_REQUEST["nama"];
    $tahun=$_REQUEST["tahun"];

    if ($tahun >= 1944 && $tahun <= 1964) {
        $generasi = "Baby boomer";
        echo "$nama, anda dengan golongan $generasi";
    } else if ($tahun >= 1965 && $tahun <= 1979) {
        $generasi = "Generasi X";
        echo "$nama, anda dengan golongan $generasi";
    } else if ($tahun >= 1980 && $tahun <= 1994) {
        $generasi = "Generasi Y (Millenial)";
        echo "$nama, anda dengan golongan $generasi";
    } else if ($tahun >= 1995 & $tahun <= 2015) {
        $generasi = "Generasi Z";
        echo "$nama, anda dengan golongan $generasi";
    } else {
        echo "$nama, tahun lahir anda tidak terdeteksi";
    }