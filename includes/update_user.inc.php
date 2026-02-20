<?php
require_once('../connect.php');

if (isset($_POST['add'])) {

    $username = stripslashes($_POST['username']); // removes backslashes
    $username = mysqli_real_escape_string($conn, $username); //escapes special characters in a string
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $dob = $_POST['dob'];
    $trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into `users_lime` (username, password, email, dob, trn_date) VALUES ('$username', '$password', '$email', '$dob', '$trn_date')";
    $result = mysqli_query($conn, $query);

    if($result) {
        header('location: ../admin?feed=User created successfully!');
    } else {
        header('location: ../admin?error=Could not create a new user!');
    }
}