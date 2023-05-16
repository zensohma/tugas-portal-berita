<?php
include 'koneksi.php';

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];
    // $gambar = $_POST['gambar'];

    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];

    if (file_exists($lokasi_gambar)) {
        move_uploaded_file($lokasi_gambar, 'uploads/' .$nama_gambar);
    }




    $result = mysqli_query($connect, "INSERT INTO tb_berita (judul, isi, penulis, tanggal, gambar) VALUES ('$judul', '$isi', '$penulis', '$tanggal', '$nama_gambar')");
   
    if($result) {
        echo "<script>alert('Data Berhasil Di tambah');window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di tambah');window.location.href='index.php'</script>";
    }


?>