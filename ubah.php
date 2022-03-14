<?php

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'ubah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ubah Data Mahasiswa</title>
</head>

<style>
     legend {
          color: white;
          padding: 4px;
          background: pink;
          border-radius: 4px;
     }

     fieldset {
          max-width: 400px;
          border-radius: 10px;
          border-color: pink;
          background: yellow;
     }

     label {
          float: left;
          color: blue;
     }

     input {
          border: none;
          border-radius: 10px;
          height: 30px;
     }

     button {
          background: blue;

     }

     
</style>

<body background="wndaa.jpeg">


     <div align="center">
          <form action="" method="POST">
               <fieldset>
                    <legend>Ubah Data Mahasiswa</legend>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">
                    <ul>
                         <p>
                              <label for="nama" style="margin-right: 25px;">
                                   NAMA : </label>
                              <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
                         </p>

                         <p>
                              <label for="npm" style="margin-right: 39px;">
                                   NPM : </label>
                              <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
                         </p>

                         <p>
                              <label for="jurusan" style="margin-right: 1px;">
                                   JURUSAN : </label>
                              <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
                         </p>

                         <p>
                              <label for="email" style="margin-right: 25px;">
                                   EMAIL : </label>
                              <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
                         </p>

                         <p>
                              <label for="gambar" style="margin-right: 23px;">
                                   PHOTO : </label>
                                   <img src="img/<?= $mhs["gambar"] ?>" width="40">
                              <input type="file" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
                         </p>

                         <p>
                              <button type="submit" name="submit">Ubah Data</button>
                         </p>
                    </ul>
               </fieldset>
          </form>
     </div>

     
</body>