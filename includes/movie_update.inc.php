<?php
require_once('../connect.php');

if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $director = $_POST['director'];
    $premiere = $_POST['premiere'];
    $genre = $_POST['genre'];
    $synopsis = $_POST['synopsis'];
    $img = $_FILES['img']['name'];
    $stock = $_POST['stock'];

    if (move_uploaded_file($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name'])) {
        header('location: ../admin?feed=Poster uplaoded!');
    } else {
        header('location: ../admin?error=Ups! Something went wrong...');
    }

    $query = "INSERT into `movie` (title, director, premiere, genre, synopsis, img, stock) VALUES ('$title', '$director', '$premiere', '$genre', '$synopsis', '$img', '$stock')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location: ../admin?feed=Movie added successfully!');
    } else {
        header('location: ../admin?error=Something went wrong!');
    }
}

if (isset($_POST['set_price'])) {

    $price = $_POST['price'];

    $sql = "UPDATE limePrice SET price='$price' WHERE ID=1 ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../admin?feed=Price set successfully!');
    } else {
        header('location: ../admin?error=Something went wrong!');
    }
}
