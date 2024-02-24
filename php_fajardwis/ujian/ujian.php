<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
.btn {
  display: inline-block;
  padding: 10px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  border-radius: 10px;
  box-shadow: 0 9px #999;
}

.btn:hover {background-color: blue}

.btn:active {
  background-color: grey;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
  </head>
  <body style="background-color: #005B66;  font-family:cursive;">
    
    <!-- Navbar awal -->
     


    <!-- Navbar akhir -->

    <!-- Card awal -->
    <br>
    <center><h2>PENGGAJIHAN</h2>
    <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2></center>
    <div class="card text-white bg-info mt-5 ml-5 mr-5" 
    style="
    box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8); 
    border-radius: 10px;">
  <div class="card-header bg-dark" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.8); font-family:cursive;">
    Data Penggajihan
  </div>
  <div class="card-body">

    <!-- Form awal -->

  <form method="POST" action="ujian-2.php" style="font-family:cursive;">
  <div class="form-group">
    <label for="">No</label>
    <input type="text" class="form-control" name= "no" id="" placeholder="No">
  </div>
  
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" id="" placeholder="Nama">
  </div>

  <div class="form-group">
    <label for="">Unit Pendidikan</label>
    <select class="form-control" name="unit_pendidikan">
        <option value="Anda Tidak Memilih Unit Pendidikan"selected>Pilih Unit Pendidikan</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SMK">SMK</option>
    </select>
  </div>

  <div class="form-group">
    <label for="">Tanggal Gaji</label>
    <input type="date" class="form-control" name= "tanggal_gaji" id="" placeholder="Tanggal Gaji">
  </div>

  <div class="row">
    <div class="col">
    <legend align="center">Gaji</legend>
        <label for="">Jabatan</label>
        <select class="form-control" name="jabatan">
        <option value="Anda Tidak Memilih Jabatan" selected>Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
    </select>
    </div>
    <div class="col">
    <legend align="center">Potongan</legend>
        <label for="">BPJS</label>
      <input type="text" class="form-control" name="bpjs" placeholder="BPJS">
    </div>
  </div>

  <div class="row">
    <div class="col">
        <label for="">Lama Kerja</label>
      <input type="text" class="form-control" name="lama_kerja" placeholder="Lama Kerja">
    </div>
    <div class="col">
        <label for="">Pinjaman</label>
      <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman">
    </div>
  </div>

  <div class="row">
    <div class="col">
        <label for="">Status Kerja</label>
        <select class="form-control" name="status_kerja">
        <option value="Anda Tidak Memilih Status Kerja" selected>Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
    </select>
    </div>
    <div class="col">
        <label for="">Tabungan</label>
      <input type="text" class="form-control" name="tabungan" placeholder="Tabungan">
    </div>
  </div>

  <div class="row">

    <div class="col-md-6 mb-3">
        <label for="">Lainnya</label>
      <input type="text" class="form-control" name="lainnya" placeholder="Lainnya">
    </div>
  </div>

  <center><button type="submit" name="submit" class="btn btn-primary" style="box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8);">Submit</button></center>
</form>

    <!-- Form akhir -->

  </div>
</div>

    <!-- Card akhir -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

