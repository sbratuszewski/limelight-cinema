<?php
require_once('../connect.php');



$movie = $_POST['movie'];
$cinema = $_POST['cinema'];

$num = $_POST['seatNum'];

echo($movie.$cinema.$num);

$sql = "SELECT ID, price FROM limePrice";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
$price = $row['price'];
$total = $num * $price;
echo '<div>
<h4>Your Purchase</h4>
<p>Movie: ' . $movie . '</p>
<p>Theathre: ' . $cinema . '</p>
<p>Screening time: ' . $time . '</p>
<p>Number of tickets: ' . $num . '</p>
<p>Total: &pound;' . $total . '</p>

<a href="../index">Go back to the home page >></a>
</div>';}
?>