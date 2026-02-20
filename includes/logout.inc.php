
<?php
session_start();
session_destroy();
header("location: ../index?feed=You are now logged out")
?>
