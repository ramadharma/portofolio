
<?php
    include '../config.php';
    if(@$_POST ['simpan']){
        $nama=@$_POST['nama'];
        $jeniskelamin=@$_POST['jeniskelamin'];
        $ttl=@$_POST['ttl'];
        $umur=@$_POST['umur'];
        $alamat=@$_POST['alamat'];
        $notelp=@$_POST['notelp'];
        $a = @$_POST['j1'];
        $b = @$_POST['j2'];
        $c = @$_POST['j3'];
        $d = @$_POST['j4'];
        $e = @$_POST['j5'];
        $n = 'NEGATIF';
        $p = 'POSITIF';
        $total = $a + $b + $c + $d + $e;
        
        $x = $koneksi;

        if ($x) {

            if ($total >= 3) {

                mysqli_query($koneksi, "INSERT INTO `user` (nama, jeniskelamin, ttl, umur, alamat, notelp, hasil) 
                VALUES('$nama', '$jeniskelamin', '$ttl', '$umur', '$alamat', '$notelp', '$p')");

                session_start();
                $_SESSION['nama'] = $nama;
                $_SESSION['alamat'] = $alamat;
                header("location: ../hasil/hasil.php");

            } else {

                mysqli_query($koneksi, "INSERT INTO `user` (nama, jeniskelamin, ttl, umur, alamat, notelp, hasil) 
                VALUES('$nama', '$jeniskelamin', '$ttl', '$umur', '$alamat', '$notelp', '$n')");
                
                session_start();
                $_SESSION['nama'] = $nama;
                $_SESSION['alamat'] = $alamat;
                header("location: ../hasil/hasil2.php");
            } 
            
        
    }
}
    ?>