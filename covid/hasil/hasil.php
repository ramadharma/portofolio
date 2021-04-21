<?php

        session_start();

    if(!isset($_SESSION['nama'])){
        header("location: ../form.php?access_denied");
    }
        
?>

<!-- html  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Checkup</title>

    <link rel="stylesheet" href="../aset/css/hasil.css">
</head>
<body>

    <!-- hasil -->
    <section id="hasil">
    <div class="hasil">
        <?php
        echo "".$_SESSION['nama'];
        // echo "<br>".$_SESSION['alamat'];
        ?>
        
        <div class="keterangan1">
            <h3 style="color: tomato">Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</h3>
        
            <a href="../alat/home.php"><button style="
                font-weight: 500;
                font-size: 16px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 10px 30px;
                border-radius: 50px;
                transition: 0.5s;
                color: #73f5ad;
                border: 2px solid #73f5ad;
                background: none;">
                Kembali ke Beranda
            </button></a>

        <!-- Terimakasih -->
        <h5>Terimakasih telah menggunakan test ini, semoga anda sehat selalu. <br> Tetap waspada, tidak perlu panik.</h5>
        </div>
    </div>
    </section>

</body>
</html>