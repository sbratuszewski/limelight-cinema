<?php

require_once ('../connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM movie WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location: ../admin?feed=Movie deleted successfully");
        die;
    } else {
        header("location: ../admin?error=Ups! Something went wrong...");
        die;
    }
} else {
    header("location: ../admin");
}
?>