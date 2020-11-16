<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah srting yang kita buat sendiri

$anime = [
    [
        "title" => "The Rising of the Shield Hero",
        "author" => "Aneko Yusagi",
        "genres" => "Dark fantasy, Isekai",
        "mc" => "Iwatani Naofumi",
        "gambar" => "shield.jpg"
    ],
    [
        "title" => "One Piece",
        "author" => "Eiichiro Oda",
        "genres" => "Adventure, ‎Fantasy",
        "mc" => "Monkey D. Luffy",
        "gambar" => "one piece.jpg"
    ],
    [
        "title" => "Naruto",
        "author" => "Masashi Kishimoto",
        "genres" => "Adventure fiction, Fantasy, Martial Arts",
        "mc" => "Naruto Uzumaki",
        "gambar" => "naruto.jpg"
    ],
    [
        "title" => "Dr. Stone",
        "author" => "Riichiro Inagaki",
        "genres" => "Adventure, Sci-Fi, Shounen",
        "mc" => "Senku",
        "gambar" => "Dr_Stone.jpg"
    ],
    [
        "title" => "Demon Slayer",
        "author" => "Koyoharu Gotouge",
        "genres" => "Adventure, ‎dark fantasy‎, ‎martial arts‎",
        "mc" => "Kamado Tanjiro",
        "gambar" => "demon slayer.jpg"
    ],
    [
        "title" => "Fullmetal Alchemist",
        "author" => "Hiromu Arakawa",
        "genres" => "Adventure fiction, Dark fantasy, Steampunk",
        "mc" => "Edward Elric",
        "gambar" => "fullmetal.jpg"
    ],
    [
        "title" => "That Time I Got Reincarnated as a Slime",
        "author" => "Fuse",
        "genres" => "Fantasy, ‎Isekai",
        "mc" => "Rimuru Tempest",
        "gambar" => "slime.jpg"
    ],
    [
        "title" => "My Hero Acadamia",
        "author" => "Kohei Horikoshi",
        "genres" => "Adventure fiction, Fantasy, Superhero fiction, Comedy, Science Fiction",
        "mc" => " Midoriya Izuku",
        "gambar" => "bokuNoHero.jpg"
    ],
    [
        "title" => "Yu-Gi-Oh!",
        "author" => "Kazuki Takahashi",
        "genres" => "Adventure, Fantasy, Science fiction",
        "mc" => "Yugi Moto",
        "gambar" => "yugioh.png"
    ],
    [
        "title" => "One Punch Man",
        "author" => "ONE",
        "genres" => "Action, Comedy, Superhero",
        "mc" => " Saitama",
        "gambar" => "opm.jpg"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Anime Series</title>
    <style>
        .tebal {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
    </style>
</head>

<body>
    <h1>Best Anime Series</h1>

    <?php foreach ($anime as $ani) : ?>
        <ul class="tebal">
            <p>
                <img src="img/<?= $ani["gambar"]; ?>">
            </p>
            <li>Title : <?= $ani["title"]; ?></li>
            <li>Author : <?= $ani["author"]; ?></li>
            <li>Genres : <?= $ani["genres"]; ?></li>
            <li>Main Character : <?= $ani["mc"]; ?></li>
            <br><br>
        </ul>
    <?php endforeach; ?>
</body>

</html>