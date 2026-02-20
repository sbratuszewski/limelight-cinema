                    <?php
                    if (isset($_SESSION["user"])) {

                        require_once('connect.php');

                        $username = $_SESSION["user"];

                        $sql = "SELECT dob FROM users_lime WHERE username='$username'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $dob = $row['dob'];

                        list($y, $m, $d) = explode("-", $dob);
                        $birthday = mktime(0, 0, 0, $m, $d, $y);
                        $differnence = time() - $birthday;
                        $age = floor($differnence / 31556926);

                        if ($username === 'admin') {
                            echo "<li class='nav-item mr-3' id='admin'>
                            <a class='nav-link' href='admin'>Admin</a>
                        </li>";
                        } else {
                            if ($age < 18) {
                                $_SESSION['age'] = 'young';
                                echo "<li class='nav-item mr-3' id='play'>
                            <a class='nav-link' href='play'>Play</a>
                        </li>";
                            } else if ($age >= 18) {
                                $_SESSION['age'] = 'adult';
                                echo "<li class='nav-item mr-3' id='book'>
                            <a class='nav-link' href='book'>Tickets</a>
                        </li>";
                            }
                        }
                        echo "<li class='nav-item mr-3' id='logout.inc'>
                            <a class='nav-link text-capitalize' href='includes/logout.inc'>Log out</a>
                        </li>";
                        echo "<li class='nav-item mr-3'>
                            <a class='nav-link nav-user  text-capitalize'>
                            <i class='fas fa-user pr-2'></i>"
                            . $username . "</a>
                        </li>";
                    } else {
                        require_once('login.php');
                        require_once('signup.php');
                    }
                    ?>