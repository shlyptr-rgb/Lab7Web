<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>

    <h1>Form Input</h1>

    <form action="form_input.php" method="post">
        Nama: <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <hr> 

    <?php
        // Menggunakan isset() untuk cek apakah tombol Kirim sudah ditekan
        // dan apakah key 'nama' ada di array $_POST
        if (isset($_POST['nama'])) {
            
            // Ambil data nama yang dikirim dari formulir
            $nama_user = $_POST['nama']; 

            // Cek apakah kolom nama tidak kosong
            if (!empty($nama_user)) {
                // Tampilkan pesan sambutan hanya jika nama diisi
                echo "Selamat Datang " . $nama_user;
            } else {
                echo "Selamat Datang"; // Atau pesan lain jika kolom nama kosong
            }

        }
        // Jika formulir belum di-submit, bagian ini diabaikan,
        // dan warning Undefined array key akan hilang.
    ?>

</body>
</html>