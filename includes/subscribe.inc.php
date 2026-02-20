<?php
require_once('../connect.php');

if (isset($_POST['submit'])) {

    //allows use of special characters
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //chek if email is alredy in db
    $sql = "SELECT * FROM news_lime WHERE email='$email'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query); //number of rows with given email

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //check if it is an email format
        header('location: ../index?err=Inavalid email address! Try again...');
    } else if ($count > 0) { //check if already exists in db
        header('location: ../index?err=You have already subscribed before');
        die;
    } else {
        //insert input to db
        $sql = "INSERT INTO news_lime(email) VALUES('$email')";

        $query = mysqli_query($conn, $sql);

        //feedback messages
        if ($query) {
            header('location: ../index?msg=Success! Thank you for subscribinng');
            
            die;
        } else {
            header('location: ../index?err=Ups! Something went wrong...');
            die;
        }
    }

} else {
    header('location: ../index');
}
