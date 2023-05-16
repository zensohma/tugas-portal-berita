
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query_mysqli = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita='$id' ");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
</head>
<body>
    
<form action="aupd.php" method="POST">
        <h1>Ubah Data Siswa Siswa</h1>
        <table>
            <tr>
                <td width="120">Judul</td>
                <input type="hidden" name="id_berita" value="<?php echo $data['id_berita'] ?>">
                <td><input type="text" name="judul" value="<?php echo $data['judul'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" id="" value="<?php echo $data['tanggal'] ?>"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" id="" value="<?php echo $data['penulis'] ?>"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><input type="text" name="isi" id="" cols="30" rows="10" value="<?php echo $data['isi'] ?>"></td>
            </tr>   
            <tr>
                
                <td><input type="submit"  name="update"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>