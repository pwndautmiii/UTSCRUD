<?php
// Koneksi ke database
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Mahasiswa</title>
</head>
<style>
    
    table{
  border-collapse:collapse;
  font:normal normal 12px Verdana,Arial,Sans-Serif;
  color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
  background:blue;
  color:#DCDCDC;
  font-weight:bold;
  font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
  vertical-align:center;
  padding:10px 30px;
  border:1px solid #0202020c;
}
/* Mengatur warna baris */
table tr {
  background:pink;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
  background:orange;
}
 </style>


<body background="wndaa.jpeg">

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <table style="margin-left:auto;margin-right:auto"  border="1" cellpadding="10" cellspacing="0">
        <tr>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Photo</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>

                <td> <?= $i; ?> </td>

                <td>
                <a href="ubah.php?id=<?php echo $row["id"]; ?>">
                <button style="background-color:Blue; border-color:blue; color:white;">UBAH </button> </a>
                <a href="hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Yakin Ingin Menghapus Data');  ">
                <button style="background-color:red; border-color:red; color:white;">HAPUS </button> </a></a>
                </td>
                <td><img src="img/<?php echo $row["gambar"] ?>" width="50"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>
