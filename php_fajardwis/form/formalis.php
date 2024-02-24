<!DOCTYPE html>
<head>
    <title>FORM DATA DIRI</title>
</head>
<link rel="stylesheet" href="cover.css">
<body>
    <div><center>
        <h2>Biodata diri</h2>
    <form method="POST" action="proses-formalis.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="Tanggallahir"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><input type="radio" name="Jeniskelamin" value="laki-laki">laki-laki
                    <input type="radio" name="Jeniskelamin" value="perempuan">perempuan
                    <input type="radio" name="Jeniskelamin" value="netral">netral</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" id="" cols="" rows=""></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="Agama" id="">
                        <option value="islam">islam</option>
                        <option value="buddha">buddha</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><input type="text" name="Pendidikan"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>:</td>
                <td><input type="text" name="Status"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="text" name="Hobi"></td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td>:</td>
                <td><input type="text" name="Cita-cita"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
</body>
</html>

