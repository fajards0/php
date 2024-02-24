<?php
    $gaji = 1000000;
    $pajak = 0.025;

    $thp = $gaji - ($gaji * $pajak);
    echo "Gaji Sebelum di potong pajak : <b>$gaji</b><br>";
    echo "Gaji bersih : <b>$thp</b><br>";