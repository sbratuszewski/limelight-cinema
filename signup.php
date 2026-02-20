<?php
require_once('connect.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($conn, $username); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $dob = $_REQUEST['dob'];
    $trn_date = date("Y-m-d H:i:s");

    // checking if user exists
    $sql = "SELECT * FROM users_lime WHERE username='$username' and email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // input validation
    if ($user) { // if user already exists 
        if ($user['username'] === $username) {
            header('location: index?error=User name already taken...');
        }
    } else if ($user) { // if eamail already exists 
        if ($user['email'] === $email) {
            header('location: index?error=User with the e-mail entered already exists...');
        }
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //email validation
        header('location: index?error=Invalid email! Try again...');
    } else {
        // if everything is ok insert into db
        $query = "INSERT into `users_lime` (username, password, email, dob, trn_date) VALUES ('$username', '$password', '$email', '$dob', '$trn_date')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('location: index?feed=Success! ' . $username . ', your account is now created');
            die;
        }
    }
} else {
?>
    <!-- sign up area trigger modal -->
    <li class="nav-item login-link">
        <a class="nav-link text-capitalize " data-toggle="modal" data-target="#signup" href="#">Sign Up</a>
    </li>
    <!-- sign up modal -->
    <div class="modal fade pt-5 mt-5" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-shadow">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-lowercase text-white modal-link pl-5 pt-3">Sign up!</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <i class="fal fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <form action="signup.php" method="POST">
                        <input type="text" name="username" placeholder="Username" class="d-block p-2 mb-3 w-75 mx-auto log-input text-center text-white" required>
                        <input type="text" name="email" placeholder="Email" class="d-block p-2 mb-3 w-75 mx-auto log-input text-center text-white" required>
                        <input type="password" name="password" placeholder="password" class="d-block p-2 mb-3 w-75 mx-auto log-input text-center text-white" required>
                        <div class="row w-75 mx-auto pt-3">
                            <label for="dob" class="text-lowercase text-white pt-2">Date of
                                birth:</label>n
                            <input type="date" id="dob" name="dob" placeholder="yyyy-mm-dd" class="p-2 ml-auto dob-input text-white" required>
                        </div>
                        <div class="row w-75 mx-auto pt-5">
                            <button type="submit" name="submit" class="btn btn-pink ml-auto">Sign
                                up</button>
                        </div>
                        <div class="row w-75 mx-auto mt-5">
                            <a class="text-lowercase modal-link mx-auto" href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Already have an account?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>