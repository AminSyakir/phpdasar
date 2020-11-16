<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data anime berdasarkan id
$ani = query("SELECT * FROM anime WHERE id = $id")[0];


// check apakah button submit sudah ditekan atau belum
if (isset($_POST["submit"])) {



    // check adakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('berhasil diuabah');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('gagal diubah');
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
    <title>Update New Anime</title>
</head>

<body>
    <h1>Update New Anime</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ani["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $ani["gambar"]; ?>">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" value="<?= $ani["title"]; ?>">
            </li>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" value="<?= $ani["author"]; ?>">
            </li>
            <li>
                <label for=" genres">Genres : </label>
                <input type="text" name="genres" id="genres" value="<?= $ani["genres"]; ?>">
            </li>
            <li>
                <label for=" mc">Main Character : </label>
                <input type="text" name="mc" id="mc" value="<?= $ani["mc"]; ?>">
            </li>
            <li>
                <label for=" gambar">Gambar : </label>
                <img src="img/<?= $ani["gambar"]; ?>" width="40"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type=" submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>

</body>

</html>