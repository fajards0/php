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
  <body style="background-color: #005B66;">
    
    <!-- Navbar awal -->
     
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.8);">
  <a class="navbar-brand" href="#" style="font-family:cursive;">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn-outline-secondary my-2 my-sm-0" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn-outline-secondary my-2 my-sm-0" href="form2.php">Data Orangtua <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- Navbar akhir -->

    <!-- Card awal -->
    <div class="card text-white bg-info mt-5 ml-5 mr-5" 
    style="
    box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8); 
    border-radius: 10px;">
  <div class="card-header bg-dark" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.8); font-family:cursive;">
    Form Data Orangtua
  </div>
  <div class="card-body">

    <!-- Form awal -->

  <form method="POST" action="" style="font-family:cursive;">
  <div class="form-group">
    <label for="">Nama Ayah</label>
    <input type="text" class="form-control" name= "nama_ayah" id="" aria-describedby="">
  </div>
  
  <div class="form-group">
    <label for="">Tanggal Lahir (Ayah)</label>
    <input type="date" class="form-control" name= "tanggal_lahir_ayah" id="">
  </div>

  <div class="form-group">
    <label for="">Nama Ibu</label>
    <input type="text" class="form-control" name= "nama_ibu" id="">
  </div>

  <div class="form-group">
    <label for="">Tanggal Lahir (Ibu)</label>
    <input type="date" class="form-control" name= "tanggal_lahir_ibu" id="">
  </div>

  <button type="submit" name="submit" class="btn btn-primary" style="box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8);">Submit</button>
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

<?php
if(isset($_POST['submit'])){

echo "<br>";
echo "<center>";

$nama_ayah = $_POST['nama_ayah'];
$tanggal_lahir_ayah = $_POST['tanggal_lahir_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$tanggal_lahir_ibu = $_POST['tanggal_lahir_ibu'];

class hasil{
    public function pendaftaran($nama_ayah1,$tanggal_lahir_ayah1,$nama_ibu1,$tanggal_lahir_ibu1){
        ?>
        <div class="card text-white bg-secondary mb-3 mt-5 ml-5 mr-5" style="max-width: 30rem; box-shadow: 0px 0px 5px rgba(0.8, 0.8, 0.8, 0.8); 
    border-radius: 10px;">
        <div class="card-header bg-dark" style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.8); font-family:cursive;"><h3>Hasil Data Orangtua</h3></div>
        <div class="card-body">
          <h5 class="card-title">Hasil Data Sukses 1</h5>
          <table>
            <tr>
              <td>Nama Ayah</td>
              <td>:</td>
              <td><?php echo "$nama_ayah1"; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir Ayah</td>
              <td>:</td>
              <td><?php echo "$tanggal_lahir_ayah1"; ?></td>
            </tr>
            <tr>
              <td>Nama Ibu</td>
              <td>:</td>
              <td><?php echo "$nama_ibu1"; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir Ibu</td>
              <td>:</td>
              <td><?php echo "$tanggal_lahir_ibu1"; ?></td>
            </tr>
          </table>
        </div>
      </div>

      <?php
    
    }

}

$cetak = new hasil();

echo $cetak->pendaftaran($nama_ayah,$tanggal_lahir_ayah,$nama_ibu,$tanggal_lahir_ibu);

} 