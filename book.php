<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['age'] === 'adult') {
    require_once('connect.php');
    require_once('head.php');
    require_once('header.php');
?>

    <main class="my-5 py-5">
        <!-- booking process -->
        <div class="container form-cms mb-5">
            <div class="row  py-5">
                <div class="col-3"></div>
                <div class="admin-content col-6">
                    <h2 class="text-heading text-white text-center py-3">Purchase your tickets</h2>
                    <p class="text-white mb-5">Each ticket costs the same with us, regardless of the film, selected cinema or the age of the viewer. You
                        simply always pay the same for a seat. The current ticket price is <span class="text-pink">£
                            <?php
                            $sql = "SELECT ID, price FROM limePrice";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['price'];
                            }
                            ?>
                        </span> which is a great price to watch a movie in our amazing cinema. We wish you a nice movie screening.</p>


                    <form action="includes/book.inc.php" method="POST">

                        <!-- select movie -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="text-white">Select movie</label>
                            <select name="movie" class="form-control" id="exampleFormControlSelect1">
                                <option selected disabled>movies</option>
                                <?php
                                $sql = "SELECT title FROM movie";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $selected = $row['title'] == $_GET['title'] ? ' selected' : '';
                                        echo '<option' . $selected . '>' . $row['title'] . '</option>';
                                    }
                                } else {
                                    echo "<h4 class='text-pink text-center'>Sorry, no movies here!</h4>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- select theathre -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="text-white">Select theathre</label>
                            <select name="cinema" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected disabled>theatres</option>
                                <option>Dalry Limelight Cinema</option>
                                <option>Leith Limelight Cinema</option>
                                <option>Morningside Limelight Cinema</option>
                                <option>Portobello Limelight Cinema</option>
                                <option>Stockbridge Limelight Cinema</option>
                            </select>
                        </div>

                        <!-- screening times -->
                        <!-- <div class="form-group">
                            <label for="exampleFormControlSelect1" class="text-white">Screening time</label>
                            <select name="showTime" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected disabled>time</option>
                                <option value="1400">14:00</option>
                                <option value="1930">19:30</option>
                            </select>
                        </div> -->

                        <!-- numb of tickets -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="text-white">Number of seats</label>
                            <select type="number" name="seatNum" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected disabled>quantity</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>

                        <!-- terms consent -->
                        <div class="form-group">
                            <input class="d-inline mr-2" type="checkbox" id="consent" name="consent" required>
                            <p class="text-white d-inline">I agree to <a href="#" class="text-pink">Terms
                                    and
                                    Conditions</a>
                            </p>
                        </div>

                        <!-- payment button -->
                        <button class="btn btn-pink w-100 mt-3" type="submit" name="submit">Go to the payment</button>

                    </form>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        </div>

        <!-- arrow up -->
        <i class="fas fa-arrow-up fa-3x" id="arrowup"></i>
    </main>
<?php require_once('footer.php');
} else {
    header('location: index?error=Only adult and logged in user can purchase a ticket!');
} ?>