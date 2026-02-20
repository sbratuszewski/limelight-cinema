<?php

require_once ('../connect.php');

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $sql = "DELETE FROM news_lime WHERE ID='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location: ../admin?msg=Subscriber deleted successfully");
        die;
    } else {
        header("location: ../admin?err=Ups! Something went wrong...");
        die;
    }
} else {
    header("location: ../admin");
}
?>