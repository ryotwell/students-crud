<?php

use Helpers\Database;

require 'autoload.php';

$students = Database::query("SELECT * FROM `students`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(config('app')['name']) ?></title>

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


    <h2>Students</h2>

    <a href="/create.php">Tambah data siswa</a>

    <div class="container">
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $loop = 1 ?>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <th><?= $loop++ ?></th>
                    <td><?= e($student['name']); ?></td>
                    <td><?= e($student['nisn']) ?></td>
                    <td><?= e($student['address']) ?></td>
                    <td><a href="<?= e(url("/edit.php?id={$student['id']}")) ?>">Edit</a> | <a href="<?= e(url("/delete.php?id={$student['id']}")) ?>">Hapus</a></td>
                </tr>
            <?php endforeach ?>
        </table>
        <?php if (!empty($_GET['id'])) : ?>
            <small style="color: red;"><?= 'Siswa dengan id: ' . e($_GET['id']) . ' berhasil di hapus.' ?></small>
        <?php endif ?>
    </div>

</body>

</html>