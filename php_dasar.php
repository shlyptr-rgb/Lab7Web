<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>

    <?php
        // Deklarasi dan inisialisasi variabel untuk bagian "Menggunakan Variabel"
        $nim = "0411500400";
        $nama = "Abdullah";
    ?>

    <h1>Belajar PHP Dasar</h1>
    
    <?php 
        // Mencetak teks "Hello World"
        echo "Hello World"; 
    ?>

    <br>
    
    <h2>Menggunakan Variable</h2>
    
    <?php
        // Mencetak NIM dan Nama menggunakan variabel yang telah dideklarasikan
        echo "NIM : " . $nim . "<br>"; 
        echo "Nama : " . $nama; 
    ?>

