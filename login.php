                    <!-- login area trigger modal -->
                    <li class="nav-item login-link">
                        <a class="nav-link text-capitalize " data-toggle="modal" data-target="#login" href="#">Log in</a>
                    </li>
                    <!-- log in modal -->
                    <div class="modal fade pt-5 mt-5" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-shadow">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="text-lowercase text-white modal-link pl-5 pt-3">Log in !
                                    </h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <i class="fal fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <?php
                                // If form submitted, insert values into the database.
                                if (isset($_POST['submit'])) {

                                    require_once('connect.php');

                                    $username = $_POST['username'];
                                    $password = $_POST['password'];

                                    $sql = "SELECT * FROM users_lime WHERE username='$username'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $psw = $row['password'];

                                    if ($password === $psw) {

                                        session_start();
                                        $_SESSION['user'] = $username;

                                        header("location: index?feed=You are now logged in!");
                                    } else {
                                        header("location: index?error=Username or password is incorrect!");
                                    }
                                } else { 
                                ?>
                                    <div class="modal-body p-5">
                                        <form action="login.php" method="POST">

                                            <input type="text" name="username" placeholder="Username" class="d-block p-2 mb-3 p-1 w-75 mx-auto log-input text-center text-white" required>

                                            <input type="password" name="password" placeholder="password" class="d-block p-2 mb-3 p-1 w-75 mx-auto log-input  text-center text-white" required>

                                            <div class="row w-75 mx-auto pt-3">
                                                <button type="submit" name="submit" class="btn btn-pink ml-auto">Log
                                                    in</button>
                                            </div>

                                            <div class="row w-75 mx-auto mt-5">
                                                <a class="text-lowercase modal-link mx-auto" href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal">Not registered yet?
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>