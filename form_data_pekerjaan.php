<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pekerjaan</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            backdrop-filter: blur(4px);
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 400px;
            text-align: left;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #6a11cb;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        input[type="submit"] {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            transform: scale(1.03);
            opacity: 0.9;
        }

        .hasil {
            margin-top: 20px;
            background: rgba(247, 247, 247, 0.9);
            border-radius: 10px;
            padding: 15px;
        }

        .hasil h3 {
            color: #6a11cb;
            margin-top: 0;
        }

        .gaji {
            font-weight: bold;
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Input Data</h2>
        <form method="post" action="">
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama..." required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>

            <label>Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Programmer">Programmer</option>
                <option value="Desainer">Desainer</option>
                <option value="Guru">Guru</option>
                <option value="Dokter">Dokter</option>
            </select>

            <input type="submit" name="submit" value="Kirim">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Hitung umur
            $tgl_lahir = new DateTime($tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($tgl_lahir)->y;

            // Tentukan gaji
            switch ($pekerjaan) {
                case 'Programmer': $gaji = 10000000; break;
                case 'Desainer': $gaji = 8000000; break;
                case 'Guru': $gaji = 6000000; break;
                case 'Dokter': $gaji = 15000000; break;
                default: $gaji = 0; break;
            }

            echo "<div class='hasil'>";
            echo "<h3>Hasil Data</h3>";
            echo "Nama: <b>$nama</b><br>";
            echo "Tanggal Lahir: $tanggal_lahir<br>";
            echo "Umur: <b>$umur tahun</b><br>";
            echo "Pekerjaan: <b>$pekerjaan</b><br>";
            echo "Gaji: <span class='gaji'>Rp " . number_format($gaji, 0, ',', '.') . "</span><br>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>