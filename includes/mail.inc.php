    <?php

    $email = $_POST['email'];
    $adminemail = "ec1928063@edinburghcollege.ac.uk";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1";

    $subject = "Limelight Cinema Query";

    $body = "<p>Thanks for gettig in touch!<br>";
    $body .= "Your message has been delivered and it will be read soon.</p><br><br>";
    $body .= "<h4>Limelight Cinema</h4> \r\n";
    $body .= "<h4>Customer Service</h4> \r\n";
    $adminbody = "<strong>Name: </strong>" . $_POST['name'] . "<br>";
    $adminbody .= "<strong>Email: </strong>" . $_POST['email'] . "<br>";
    $adminbody .= "<strong>Subject: </strong>" . "Limelight Cinema Customere Service" . "<br>";
    $adminbody .= "<strong>Message: </strong>" . $_POST['message'] . "<br>";

    mail($email, $subject, $body, $headers);
    mail($adminemail, $subject, $adminbody, $headers);

    header('location: ../contact?feed=Thank you for contacting us!');
    exit;
    ?>

    <img src="data:image/gif;base64,<?php echo base64_encode(file_get_contents('logo.svg')); ?>">
