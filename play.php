<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['age'] === 'young') {
    require_once('head.php');
    require_once('header.php');
?>
    <main class="my-5 py-5">
        <div class="container mt-5">
            <h2 class="text-heading text-white py-3">
                Let's play!
            </h2>
            <h4 class="text-white text-white font-weight-light">For our younger users, we have prepared a games zone, where everyone will find something interesting for themselves. Quizzes will allow you to test your current knowledge in a given field, but also allow you to learn something new. Have fun!</h4>
        </div>
        <div class="container my-5 p-5">
            <div class="row">
                <div class="col-lg-6 text-center p-2">
                    <iframe class="play-frame" src="https://www.addictinggames.com/embed/html5-games/19275" scrolling="no"></iframe>
                </div>
                <div class="col-lg-6 text-center p-2">
                    <iframe class="play-frame" src="https://www.addictinggames.com/embed/html5-games/24777" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </main>
    <!-- arrow up -->
    <i class="fas fa-arrow-up fa-3x" id="arrowup"></i>
    <script>
        //add class to style page background
        const body = document.querySelector('body');
        body.classList.add('play-body');
    </script>
<?php require_once('footer.php');
} else {
    header('location: index?error=Access denied!');
} ?>