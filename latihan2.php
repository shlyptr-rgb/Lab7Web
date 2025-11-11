<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefine Variable</title>
</head>
<body>

    <h1>Predefine Variable</h1>

    <?php
        // 1. Ambil nilai dari URL menggunakan Superglobal $_GET
        //    'nama' adalah key yang ada di URL (?nama=Agung)
        //    Menggunakan fungsi isset() untuk memastikan variabel 'nama' dikirimkan
        if (isset($_GET['nama'])) {
            $nama_user = $_GET['nama'];
        } else {
            // Jika parameter 'nama' tidak ada di URL, gunakan nilai default
            $nama_user = "Tamu"; 
        }
    ?>

    <p>Selamat Datang <?php echo $nama_user; ?></p>
    
</body>
</html>