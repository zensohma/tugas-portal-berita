<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <h1>Data berita</h1>
    </center>
    <center>
    <a href="insert.php"><button>Tambah</button></a>
    </center>
    <table border="1" width"50%" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Penulis</th>
                <th>isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($connect, "SELECT * FROM tb_berita");
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_berita']?></td>
                <td><?php echo $data['judul']?></td>
                <td><?php echo $data['tanggal']?></td>
                <td><img src="uploads/<?php echo $data['gambar']?>" alt="" height="100px" width="100px"></td>
                <td><?php echo $data['penulis']?></td>
                <td><?php echo $data['isi']?></td>
                <td><a href="update.php?id=<?php echo $data['id_berita'] ?>"><button>Edit</button></a> | <button><a href="delete.php?id= <?php echo $data ['id_berita']?>">Delete</a></button></td>
            </tr>
            <?php
            $no++;
            }
            ?>
        </tbody>  