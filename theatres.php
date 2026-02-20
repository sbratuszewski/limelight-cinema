<?php
session_start();
require_once('head.php');
require_once('header.php');
?>
<main class="pt-5">
    <div class="container-fluid theatres-img"></div>
    <div class="container my-5 pb-5">
        <h2 class="text-heading text-white py-3">Limelight Cinema Theatres</h2>
        <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam sapiente quia esse?
            Eius dolor enim sit autem vel, maxime dolores! Explicabo aspernatur ipsam corporis ullam! Animi
            necessitatibus rerum tenetur veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
            nam, totam sint nihil molestias, in qui aliquam consectetur soluta quo praesentium a amet, voluptate
            officia facilis beatae deserunt possimus doloremque.</p>
    </div>

    <div class="container my-5">
        <div class="row py-3">
            <div class="col-lg-6 mx-auto">
                <img src="images/erik-witsoe-GF8VvBgcJ4o-unsplash.jpg" alt="cinema" class="img-fluid" style="height: 300px;">
                <h1 class="display-4 text-white text-heading location">Dalry</h1>
                <a class="address text-uppercase" href="https://goo.gl/maps/AEQr3BPZAmSvW6jW7" target="_blank">
                    <p class="text-white">Edinburgh College <br>24 Milton Rd East, Edinburgh</p>
                </a>
            </div>
            <div class="col-lg-6 mx-auto">
                <img src="images/erik-witsoe-GF8VvBgcJ4o-unsplash.jpg" alt="cinema" class="img-fluid" style="height: 300px;">
                <h1 class="display-4 text-white text-heading location">Morningside</h1>
                <a class="address text-uppercase" href="https://goo.gl/maps/GQASSJWWimcRW1gS9" target="_blank">
                    <p class="text-white">Edinburgh College <br>24 Milton Rd East, Edinburgh</p>
                </a>
            </div>
            <div class="col-lg-6">
                <img src="images/erik-witsoe-GF8VvBgcJ4o-unsplash.jpg" alt="cinema" class="img-fluid" style="height: 300px;">
                <h1 class="display-4 text-white text-heading location">Stockbridge</h1>
                <a class="address text-uppercase" href="https://goo.gl/maps/FDxj3kfaTL1tnQDv7" target="_blank">
                    <p class="text-white">Edinburgh College <br>24 Milton Rd East, Edinburgh</p>
                </a>
            </div>
            <div class="col-lg-6">
                <img src="images/erik-witsoe-GF8VvBgcJ4o-unsplash.jpg" alt="cinema" class="img-fluid" style="height: 300px;">
                <h1 class="display-4 text-white text-heading location">Leith</h1>
                <a class="address text-uppercase" href="https://goo.gl/maps/Pa2fq72Ju4k61Xoj6" target="_blank">
                    <p class="text-white">Edinburgh College <br>24 Milton Rd East, Edinburgh</p>
                </a>
            </div>
            <div class="col-lg-6">
                <img src="images/erik-witsoe-GF8VvBgcJ4o-unsplash.jpg" alt="cinema" class="img-fluid" style="height: 300px;">
                <h1 class="display-4 text-white text-heading location">Portobello</h1>
                <a class="address text-uppercase" href="https://goo.gl/maps/VWNUX2ADDaRs41w48" target="_blank">
                    <p class="text-white">Edinburgh College <br>24 Milton Rd East, Edinburgh</p>
                </a>
            </div>
        </div>
    </div>

    <!-- arrow up -->
    <i class="fas fa-arrow-up fa-3x d-none d-lg-block" id="arrowup"></i>

    <?php require_once('footer.php'); ?>