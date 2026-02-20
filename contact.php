<?php
// include_once('includes/auth.inc.php');
session_start();
require_once('head.php');
require_once('header.php');
?>
<main class="py-5">
    <section class="container my-5">
        <form action="includes/mail.inc.php" method="POST">
            <div class="row mx-auto py-5 mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="py-3 text-heading text-center text-white">Get in touch</h2>
                    <p class="pb-3 text-white">If you have any questions or a case, write to us and we will do our best
                        to help you. Our team will write back to you as soon as possible. We make sure that each of our
                        clients is satisfied.</p>
                    <input type="text" class="form-control my-4" placeholder="Your name" name="name" aria-label="name" required>
                    <input type="text" class="form-control my-4" placeholder="Email" name="email" aria-label="email" required>
                    <input type="text" class="form-control my-4" placeholder="Phone" name="phone" aria-label="phone">
                    <textarea class="form-control my-4" placeholder="Your message" name="message" rows="4" aria-label="With textarea" required></textarea>
                    <button class="btn btn-pink float-right btn-contact" type="submit">send<i class="fas fa-paper-plane ms-2 ml-2"></i>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
        <div class="row py-5 my-5 bg-map rounded px-3">
            <div class="col-md-3 my-auto">
                <ul class="list-group pl-2">
                    <h4 class="text-heading text-white">Main office</h4>
                    <p class="text-white pb-3">
                        Edinburgh College </br>
                        24 Milton Rd E </br>
                        Edinburgh</p>
                    <h4  class="text-heading text-white">Opening hours</h4>
                    <p class="text-white pb-3">
                        Mon - Sat | 10am - 10pm</br>
                        Sun | 12am - 9pm</p>
                </ul>
            </div>
            <div class="col-md-9">
                <iframe class="contact-map rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2234.318773217474!2d-3.1007196838666125!3d55.943846684708404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b9a7365fccff%3A0x52629bc613f4b94b!2sEdinburgh%20College%20(Milton%20Road%20Campus)!5e0!3m2!1sen!2suk!4v1622677261419!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- arrow up -->
    <i class="fas fa-arrow-up fa-3x" id="arrowup"></i>

    <!-- GDPR -->
    <?php require_once('gdpr.php'); ?>
    <?php require_once('footer.php'); ?>