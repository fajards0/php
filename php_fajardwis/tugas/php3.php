<!DOCTYPE html>
<head>
    <title>FORM DATA DIRI</title>
</head>
<link rel="stylesheet" href="cover.css">
<body>
    <div><center>
        <h2>Biodata diri</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis" value="l">laki-laki
                    <input type="radio" name="jenis" value="p">perempuan</td>
            </tr>
            <tr>
                <td>Biaya register</td>
                <td>:</td>
                <td><input type="number" name="biaya"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="">
                        <option value="rpl">Rpl</option>
                        <option value="tkro">Tkro</option>
                        <option value="tbsm">Tbsm</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="DAFTAR"></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
</body>
</html>

<?php
if(isset($_POST["simpan"])){
    $a=$_POST["nama"];
    $b=$_POST["tanggal"];
    $c=$_POST["jenis"];
    $d=$_POST["biaya"];
    $e=$_POST["jurusan"];

    if ($e == "rpl") {
        $f = "2500000";
    } else if ($e == "tkro") {
        $f = "3000000";
    } else if ($e == "tbsm") {
        $f = "3500000";
    } else {

    }

    $h = $d + $f;

    echo "Nama :$a <br>";
    echo "Tanggal :$b <br>";
    echo "Jenis kelamin :$c <br>";
    echo "Biaya register :$d <br>";
    echo "Jurusan :$e <br>";
    echo "Biaya jurusan :RP $f <br>";
    echo "Total pembayaran :RP $h";

}