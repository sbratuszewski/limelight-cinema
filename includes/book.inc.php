<?php
require_once('../connect.php');

if (isset($_POST['submit'])) {

    $movie = $_POST['movie'];
    $cinema = $_POST['cinema'];
    $num = $_POST['seatNum'];

    // get the current price from db
    $sql = "SELECT price FROM limePrice";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $price = $row['price'];
    }
    // get the current stock nr from db
    $sql = "SELECT stock FROM movie WHERE title = '$movie'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $stock = $row['stock'];
    }

    $total = $num * $price;
    $stock_update = $stock - $num;

    $sql = "UPDATE movie SET stock='$stock_update' WHERE title='$movie' ";
    $result = mysqli_query($conn, $sql);
    if($result) {
            echo '<div>
    <h4>Your Purchase</h4>
    <p>Movie: ' . $movie . '</p>
    <p>Theathre: ' . $cinema . '</p>
    <p>Number of tickets: ' . $num . '</p>
    <p>Total: &pound;' . $total . '</p>

    <a href="../index">Go back to the home page</a>
</div>';
    }
}
