<?php

//  function registirasi($data){
//      global $conn;

//     // memanggil yang dimasukan users
//      $nik = $data["nik"];
//      $username = strtolower(stripslashes($data["username"]));
//      $password = mysqli_real_escape_string($conn, $data["pass"]);
//      $password2 = mysqli_real_escape_string($conn, $data["pass2"]);
//      $noTelp = $data["telp"];
    
//      // Cek konfirmasi password yang dimasukan Users
//     if($password !== $password2){
//         echo "<script> alert ('Konfirmasi Password Salah !') </script>";

//         return false;
//     };

//     // Enkripsi Password yang diinputkan users
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     //  Tambahakan user ke database
//     mysqli_query($conn, "INSERT INTO user VALUES('', '$nik', '$username', '$password', '$noTelp')");

//     return mysqli_affected_rows($conn);
 }