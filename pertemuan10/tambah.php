<?php
require 'functions.php';

// check apakah button submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // check adakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('berhasil');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('gagal');
                document.location.href = 'index.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Anime</title>
</head>

<body>
    <h1>Add New Anime</h1>

    <form method="post" action="">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text>" name="title" id="title">
            </li>
            <li>
                <label for="author">Author : </label>
                <input type="text>" name="author" id="author">
            </li>
            <li>
                <label for="genres">Genres : </label>
                <input type="text>" name="genres" id="genres">
            </li>
            <li>
                <label for="mc">Main Character : </label>
                <input type="text>" name="mc" id="mc">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text>" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>

</body>

</html>