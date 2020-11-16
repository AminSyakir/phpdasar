<?php
require 'functions.php';
$anime = query("SELECT * FROM anime");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Best Anime</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genres</th>
            <th>Main Character</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($anime as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">udah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
                <td><?= $row["title"]; ?></td>
                <td><?= $row["author"]; ?></td>
                <td><?= $row["genres"]; ?></td>
                <td><?= $row["mc"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>