<?php
    // Format "l" (huruf kecil L) mengembalikan nama hari dalam Bahasa Inggris (cth: "Tuesday")
    $nama_hari = date("l"); 
    
    // Switch akan mencocokkan nilai $nama_hari dengan setiap case
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        case "Wednesday":
            echo "Rabu";
            break;
        case "Thursday":
            echo "Kamis";
            break;
        case "Friday":
            echo "Jumat";
            break;
        case "Saturday":
            echo "Sabtu";
            break;
        default:
            echo "Hari tidak dikenal";
            break;
    }
?>