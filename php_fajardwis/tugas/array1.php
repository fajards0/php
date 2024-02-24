<!DOCTYPE html>
<head>
    <title>FORM DATA DIRI</title>
</head>
<link rel="stylesheet" href="cover.css">
<body>
    <div><center>
        <h2>Data Nilai Ujian Kelas XII RPL</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Jumlah siswa</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="PROSES"></td>
            </tr>
        </table>
    </form>
    </div>
    <br>
    <br>
</body>
</html>

<?php
if(isset($_POST["simpan"])){
    echo "<center>";
    $a=$_POST["jumlah"];
    for ($i = 1; $i <= $a; $i++){

        echo "Bilangan ke - $i <br>";
        echo "<table>
                <tr>
                    <td>NIS</td>
                    <td></td>
                    <td><input type=text></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td></td>
                    <td><input type=text></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td></td>
                    <td><input type=text></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td></td>
                    <td><input type=number></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td></td>
                    <td><input type=number></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td></td>
                    <td><input type=number></td>
                </tr>  
                <tr>
                    <td>Produktif</td>
                    <td></td>
                    <td><input type=number></td>
                </tr>
            </table> <br>";
    }
}
?>