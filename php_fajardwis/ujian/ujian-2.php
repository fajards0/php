<?php
if(isset($_POST['submit'])){

echo "<br>";
echo "<center>";

$no = $_POST['no'];
$nama = $_POST['nama'];
$unit_pendidikan = $_POST['unit_pendidikan'];
$tanggal_gaji = $_POST['tanggal_gaji'];
$jabatan = $_POST['jabatan'];
$lama_kerja = $_POST['lama_kerja'];
$status_kerja = $_POST['status_kerja'];
$bpjs = $_POST['bpjs'];
$pinjaman = $_POST['pinjaman'];
$tabungan = $_POST['tabungan'];
$lainnya = $_POST['lainnya'];
$gaji = 0;
$bonus = 0;

if ($jabatan == "Kepala Sekolah") {
  $gaji = "5000000";
} else if ($jabatan == "Wakasek") {
  $gaji = "4000000";
} else if ($jabatan == "Guru") {
  $gaji = "3000000";
} else if ($jabatan == "Karyawan") {
  $gaji = "2000000";
} else {

}
  
if ($status_kerja == "Tetap") {
  $bonus = "1000000";
} else if ($status_kerja == "Kontrak") {
  $bonus = "0";
} else {

}

$gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

class hasil{
    public function pendaftaran($no1,$nama1,$unit_pendidikan1,$tanggal_gaji1,$jabatan1,$gaji1,$lama_kerja1,$status_kerja1,$bonus1,$bpjs1,$pinjaman1,$tabungan1,$lainnya1,$gaji_bersih1){

        ?>
        <div class="card text-white bg-secondary mb-3 mt-5 ml-5 mr-5" style="max-width: 60rem; box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8); 
    border-radius: 10px;">
        <div class="card-header bg-dark" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.8); font-family:cursive;"><h3>Fajar Dwi Saputro</h3></div>
        <div class="card-body">
          <h3 class="card-title">STRUK GAJI</h3>
          <table>
            <tr>
              <td>No</td>
              <td>:</td>
              <td><?php echo "$no1"; ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?php echo "$nama1"; ?></td>
            </tr>
            <tr>
              <td>Unit Pendidikan</td>
              <td>:</td>
              <td><?php echo "$unit_pendidikan1"; ?></td>
            </tr>
            <tr>
              <td>Tanggal Gaji</td>
              <td>:</td>
              <td><?php echo "$tanggal_gaji1"; ?></td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td>:</td>
              <td><?php echo "$jabatan1"; ?></td>
            </tr>
            <tr>
              <td>Gaji</td>
              <td>:</td>
              <td><?php echo "$gaji1"; ?></td>
            </tr>
            <tr>
              <td>Lama Kerja</td>
              <td>:</td>
              <td><?php echo "$lama_kerja1"; ?></td>
            </tr>
            <tr>
              <td>Status Kerja</td>
              <td>:</td>
              <td><?php echo "$status_kerja1"; ?></td>
            </tr>
            <tr>
              <td>Bonus</td>
              <td>:</td>
              <td><?php echo "$bonus1"; ?></td>
            </tr>
            <tr>
              <td>BPJS</td>
              <td>:</td>
              <td><?php echo "$bpjs1"; ?></td>
            </tr>
            <tr>
              <td>Pinjaman</td>
              <td>:</td>
              <td><?php echo "$pinjaman1"; ?></td>
            </tr>
            <tr>
              <td>Tabungan</td>
              <td>:</td>
              <td><?php echo "$tabungan1"; ?></td>
            </tr>
            <tr>
              <td>Lainnya</td>
              <td>:</td>
              <td><?php echo "$lainnya1"; ?></td>
            </tr>
            <tr>
              <td>Gaji Bersih</td>
              <td>:</td>
              <td><?php echo "$gaji_bersih1"; ?></td>
            </tr>
          </table>
        </div>
      </div>

      <?php
    
    }

}

$cetak = new hasil();

echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);

} 