<?php
include 'koneksi.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
<form action="ainsert.php" method="POST" enctype="multipart/form-data">
        <h1>Data Siswa</h1>
        <table>
            <tr>
                <td width="120">Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td width="120">Isi</td>
                <td><input type="text" name="isi"></td>
            </tr>
            <tr>
                <td width="120">Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" id=""></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar" id=""></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
