<?php

include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM tb_berita WHERE id_berita=$id");

header('location:index.php');

?>