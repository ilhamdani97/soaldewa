<?php
//user = @sony pass = C0d3YourFuture!#’
$username = 'Ayu99v';
$password = 'p@ssW0rd#';

//  Format username: merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter. Username tidak boleh diawali dengan angka / karakter special.

if(preg_match("/^((?!([0-9]))[a-zA-Z0-9]{5,9})$/", $username)) {
  echo 'username valid <br>';
} else {
  echo 'username  tidak valid <br>';
}

//  Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol ‘@’  dan panjang minimal 8 karakter.


if(preg_match("/^[A-Za-z]@+[a-zA-Z0-9]+#{1}/", $password)) {
  echo 'password valid <br>';
} else {
  echo 'password tidak valid <br>';
}
?>