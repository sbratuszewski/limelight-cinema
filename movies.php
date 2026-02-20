
            <?php
            require_once('connect.php');

            // ID, title, img, director, premiere, genre, synopsis
            $sql = "SELECT  ID, title, img, director, premiere, genre, synopsis FROM movie";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-lg-4 col-sm-6 card card-bgc p-3 p-md-5" id="#">';
                    echo '<img src="images/' . $row['img'] . '" class="card-img-top mx-auto mt-2 img-fluid" alt="poster">';
                    echo '<div class="card-body text-white p-0 pt-3">';
                    echo '<h4 class="card-title text-heading">' . $row["title"] . '</h4>';
                    echo '<p class="card-description" data-toggle="collapse" href="#' . $row["ID"] . '" role="button" aria-expanded="false"
                    aria-controls="' . $row["ID"] . '">See descripption<i class="fas fa-caret-down ml-2"></i>
                    </p>';
                    echo '<p class="card-text collapse" id="' . $row["ID"] . '"><span class="text-pink">Year:</span> ' . $row["premiere"] . '<br><span class="text-pink">Directed by:</span> ' . $row["director"] . '<br><span class="text-pink">Genre:</span> ' . $row["genre"] . '<br><span class="text-pink">Synopsis:</span> <BR>' . $row["synopsis"] . '</p>';
                    echo '<a href="book?title=' . $row["title"] . '" type="submit" class="btn btn-pink">Book tickets</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<h4 class='text-white text-center'>No movies added yet!</h4>";
            }
            ?>