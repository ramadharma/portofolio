<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Isi Data Diri</title>

    <!-- Vendor CSS Files -->
    <link href="aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="aset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="aset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="aset/vendor/venobox/venobox.css" rel="stylesheet">
    <!-- <link href="aset/vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- CSS Manual -->
    <link rel="stylesheet" href="aset/css/style.css">
    <link rel="stylesheet" href="aset/css/tambah.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body> 

        <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.php"><span>COVID-19</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li class="get-started"><a href="index.php">home</a></li>
            </ul>
            
        </nav><!-- .nav-menu -->

        </div>
    </header><!-- Header -->


      <!-- section form  -->
      <section id="form"  class="form">
        <div class="wrapper">
            <form action="alat/tambahdata.php" class="form-data" method="post">
                <h2 class="form-data-heading text-center mt-4">Isi Data Diri</h2>

                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                required="" autofocus="" />

                <input type="text" class="form-control" name="jeniskelamin" placeholder="L / P"
                required="" autofocus="" />
                
                <input type="text" class="form-control" name="ttl" placeholder="Tempat / Tanggal Lahir"
                required="" autofocus="" />
                
                <input type="number" class="form-control" name="umur" placeholder="Umur"
                required="" autofocus="" />
                
                <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                required="" autofocus="" />
                
                <input type="number" class="form-control" name="notelp" placeholder="No Telp"
                required="" autofocus="" />

                <!-- pertanyaan -->
                <div class="title">
                    <h3>Pertanyaan</h3>
                </div>

                <!-- Pertanyaan 1 -->
                <div class="pertanyaan">
                <h6><strong> 1. Apakah Anda mengalami salah satu dari yang berikut:</strong></h6>
                    <ul style=" margin-left:20px">
                      <li>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</li>
                      <li>Nyeri dada yang parah</li>
                      <li>Sulit untuk bangun</li>
                      <li>Merasa kebingungan</li>
                      <li>Penurunan kesadaran</li>
                    </ul>
                <input type="radio" name="j1" value="1"> YA
                <input type="radio" name="j1" value="0"> TIDAK
                <br><br>
                <h6><strong> 2. Apakah Anda mengalami salah satu dari yang berikut:</strong></h6>
                    <ul style=" margin-left:20px">
                      <li>Nafas yang pendek saat istirahat</li>
                      <li>Ketidakmampuan untuk berbaring karena kesulitan bernafas</li>
                      <li>Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</li>
                    </ul>
                <input type="radio" name="j2" value="1"> YA
                <input type="radio" name="j2" value="0"> TIDAK
                <br><br>
                <h6><strong> 3. Apakah Anda mengalami salah satu dari yang berikut:</strong></h6>
                    <ul style=" margin-left:20px">
                      <li>Demam</li>
                      <li>Batuk</li>
                      <li>Bersin</li>
                      <li>Sakit Tenggorokan</li>
                      <li>Sulit Bernafas</li>
                    </ul>
                <input type="radio" name="j3" value="1"> YA
                <input type="radio" name="j3" value="0"> TIDAK
                <br><br>
                <h6><strong>4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</strong></h6>
                <input type="radio" name="j4" value="1"> YA
                <input type="radio" name="j4" value="0"> TIDAK
                <br><br>
                <h6><strong>5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</strong></h6>
                <input type="radio" name="j5" value="1"> YA
                <input type="radio" name="j5" value="0"> TIDAK
                </div><br>

                <button class="btn bg-success border-light " type="submit" name='simpan'
                value="simpan">
                Submit
                </button>
            </form>
        </div>

        
      </section>

  </body>
</html>



