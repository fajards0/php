<?php 
if(isset($_POST["simpan"])){
    echo "<center>";
    $nama=$_POST["nama"];
    $tl=$_POST["Tanggallahir"];
    $jk=$_POST["Jeniskelamin"];
    $almt=$_POST["Alamat"];
    $agm=$_POST["Agama"];
    $pdd=$_POST["Pendidikan"];
    $stts=$_POST["Status"];
    $hobi=$_POST["Hobi"];
    $cita=$_POST["Cita-cita"];

echo "=============================BIODATA DIRI=============================<br>";
echo "=============================================================<br><br>";
echo "Nama   :$nama <br>";
echo "Tanggal lahir   :$tl <br>";
echo "Jenis kelamin   :$jk <br>";
echo "Alamat   :$almt <br>";
echo "Agama   :$agm <br>";
echo "Pendidikan   :$pdd <br>";
echo "Status   :$stts <br>";
echo "Hobi   :$hobi <br>";
echo "Cita-cita   :$cita <br>";
}

?>
