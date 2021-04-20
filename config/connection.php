<?php

// Tutorial Membuat menu Register dan login : https://www.petanikode.com/php-login-register/

    // ? Variabel pada PHP
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'apm_ukk';

 //  ? Menghubungkan database
//  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    try {

      $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);

    } catch(PDOException $e){

      die("Terjadi Masalah Dengan Server: " . $e -> getMessage());

    }


 // ? Mengecek Kondisi gagal berhasil
 if( !$conn ){

   echo '<h1 style="color: red;">Keneksi ke Database Gagal</h1>';

   echo '<p>Perikasa nama database yang dimasukan dan nama database yang berada ditable phpmyadmin</p>';

}

//  OPERATOR LOGIKA
/* ? Mengecek apakah tersambung. - "Opertor Logika NOT di tulis menggunakna (!) berisi Jika nilainya "true" maka hasilnya "false" dan jika nilainya "false" maka hasilnya "true". */

/* Sedangkan jika operator logika  AND (&&) berisi jika nilainya "true' + "true" maka hasinya "true" , sedangkan jika nilainya "true" + "false" maka hasilnya "false". artinya jika operator logika  AND (&&)  nilainya ada salah satu yang "false"" maka hasilnya "false". */ 

/* Sedangkan operator logika  OR (||)  berisi jika nilainya "true" + "true" maka hasilnya "true", sedangkan jika nilinya "true" + "true" maka hasinya "true" sedangkan jika "true" + "false" maka hasilnya "false". Artinya jika operator logika  OR (||) nilainya ada salahsatu yang "true" maka hasilnya "true" */

