<?php 
 
include 'koneksi.php';

if(isset($_POST['update'])){

    $id_berita = $_POST['id_berita'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    
    $result = mysqli_query($connect, "UPDATE tb_berita SET judul='$judul', tanggal='$tanggal', isi='$isi', penulis='$penulis' WHERE id_berita='$id_berita'");
    if($result){
        echo "<script>alert('Data Berhasil Di ubah');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di ubah');window.location.href='index.php'</script>";
    }
    };
?>
