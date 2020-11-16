<?php
// connect ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $genres = htmlspecialchars($data["genres"]);
    $mc = htmlspecialchars($data["mc"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert ada
    $query = "INSERT INTO anime
              VALUES
              ('', '$title', '$author', '$genres', '$mc', '$gambar')           
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $genres = htmlspecialchars($data["genres"]);
    $mc = htmlspecialchars($data["mc"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert ada
    $query = "UPDATE anime SET
              title = '$title',
              author = '$author',
              genres = '$genres',
              mc = '$mc',
              gambar = '$gambar' 
              WHERE id = $id         
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM anime
             WHERE
            title LIKE '%$keyword%' OR
            author LIKE '%$keyword%' OR
            genres LIKE '%$keyword%' OR
            mc LIKE '%$keyword%' 
    ";
    return query($query);
}
