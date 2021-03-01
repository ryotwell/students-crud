<?php

use Helpers\Database;

require 'autoload.php';

if (isset($_POST['btn-save'])) {
    Database::query("INSERT INTO `students` (`id`, `name`, `nisn`, `address`) VALUES (NULL, '{$_POST['name']}', '{$_POST['nisn']}', '{$_POST['address']}');");
    return redirect(url('/'));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <style>
        * {
            margin: 0;
        }

        body {
            font-family: sans-serif;
            padding: 10px;
        }

        td,
        th {
            padding: 10px;
        }

        input {
            padding: 2px;
        }
    </style>
</head>

<body>

    <h2>Edit siswa</h2>

    <a href="/">Kembali</a>

    <form action="" method="POST" class="container">
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" name="nisn" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="address" required></td>
            </tr>
        </table>

        <button type="submit" name="btn-save" value="true">Simpan</button>
    </form>

</body>

</html>