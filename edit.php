<?php

use Helpers\Database;

require 'autoload.php';

if (empty($_GET['id'])) {
    return redirect(url('/'));
}

if (!$student = Database::query("SELECT * FROM `students` WHERE `id` = {$_GET['id']}")->fetch_assoc()) {
    return redirect(url('/'));
}

if (isset($_POST['btn-save'])) {
    Database::query("UPDATE `students` SET `name` = '{$_POST['name']}', `nisn` = '{$_POST['nisn']}', `address` = '{$_POST['address']}' WHERE `students`.`id` = {$student['id']}");
    return redirect(url('/edit.php?id=' . $student['id']));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

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
                <td><input type="text" name="name" value="<?= e($student['name']) ?>" required></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" name="nisn" value="<?= e($student['nisn']) ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="address" value="<?= e($student['address']) ?>" required></td>
            </tr>
        </table>

        <button type="submit" name="btn-save" value="true">Simpan</button>
    </form>

</body>

</html>