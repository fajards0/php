<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <center>
    <h2>Form Biodata Diri</h2>
    <!-- form -->
        <form method = "POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
            </table>
        </form>
    <br>
    <br>

</body>
</html>

<?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];

        echo "========== Biodata Diri ==========<br>";
        echo "==================================<br>";
        echo "Nama  = $nama <br>";
    }
    ?>