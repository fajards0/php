<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'fajar@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'taitai') {
  die("Password salah!");
}

# jika lolos alias email dan password nya benar
echo "Selamat {$email}, anda berhasil login! :)";

# tag php tidak perlu ditutup karena ia tidak bercampur dengan bahasa lainnya