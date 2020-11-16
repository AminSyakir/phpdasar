<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["title"]) ||
    !isset($_GET["author"]) ||
    !isset($_GET["genres"]) ||
    !isset($_GET["mc"]) ||
    !isset($_GET["gambar"])

) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
</head>

<body>

    <ul>
        <p><img src="img/<?= $_GET["gambar"]; ?>"></p>
        <li><?= $_GET["title"]; ?></li>
        <li><?= $_GET["author"]; ?></li>
        <li><?= $_GET["genres"]; ?></li>
        <li><?= $_GET["mc"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Homepage</a>

</body>

</html>