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
    <div class="hasil">
        <?php
        echo "".$_SESSION['nama'];
        // echo "<br>".$_SESSION['alamat'];
        ?>
        
        <div class="keterangan">
            <h3 style="color: limegreen">Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat
            Apabila anda mengalami gejala atau mendapatkan informasi baru tentang perjalanan penyakit anda, anda bisa membuka web ini lagi.</h5>
        
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

</body>
</html>