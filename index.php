<?php
// include_once('includes/auth.inc.php');
session_start();
require_once('head.php');
require_once('header.php');
?>
<main class="py-5">
    <div class="container row mx-auto mt-5">
        <h2 class="col-12 text-heading text-white mr-auto">Repertoir</h2>

        <!-- sort movies -->
        <!-- <form method="post" action="movies.php" class="mr-5 pt-3">
            <label for="movies" class="text-white">Sort by:</label>
            <select type="text" name="genre" id="genre" class="ml-2 p-1 search-selection">
                <option selected disabled>genre</option>
                <option value="action">action</option>
                <option value="animation">animation</option>
                <option value="comedy">comedy</option>
                <option value="crime">crime</option>
                <option value="drama">drama</option>
                <option value="family">family</option>
                <option value="fantasy">fantasy</option>
                <option value="horror">horror</option>
                <option value="sci-fi">sci-fi</option>
                <option value="horror">thriller</option>
            </select>
        </form> -->

        <!-- movie posters -->
        <?php require_once('movies.php'); ?>

    </div>

    <!-- arrow up -->
    <i class="fas fa-arrow-up fa-3x" id="arrowup"></i>

    <!-- GDPR -->
    <?php require_once('gdpr.php'); ?>

    <?php require_once('footer.php'); ?>