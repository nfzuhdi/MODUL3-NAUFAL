<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
    include ("connect.php");

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
    if ($_SERVER ["REQUEST_METHOD"]=="POST"){
    


// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];


    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query= "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
    VALUES ('$nama_mobil','$brand_mobil', '$warna_mobil','$tipe_mobil','$harga_mobil');";
    

    if($query) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                window.location.href = 'home.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan!');
                window.location.href = 'home.php';
            </script>
        ";
    }
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($conn) ;
?>