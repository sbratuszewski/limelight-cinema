<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin') {

    require_once('head.php');
    require_once('header.php');
?>


    <main class="my-5 py-5">
        <div class="container form-cms my-5 py-5">
            <div class="row">
                <div class="col-2">
                    <!-- pills -->
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link py-3 text-center text-uppercase active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Users</a>
                        <a class="nav-link py-3 text-center text-uppercase" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Movies</a>
                        <a class="nav-link py-3 text-center text-uppercase" id="v-pills-delete_u-tab" data-toggle="pill" href="#v-pills-delete_u" role="tab" aria-controls="v-pills-delete_u" aria-selected="false">subscribers</a>
                    </div>
                </div>
                <div class="admin-content col-10">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- users -->
                        <div class="tab-pane fade show text-white active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                            <!-- users db table -->
                            <?php require_once('user_update.php'); ?>
                        </div>

                        <!-- movies -->
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                            <?php require_once('movie_update.php'); ?>

                        </div>

                        <!-- subscribers -->
                        <div class="tab-pane fade show text-white" id="v-pills-delete_u" role="tabpanel" aria-labelledby="v-pills-delete_u-tab">

                            <?php require_once('subscr_update.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- arrow up -->
        <i class="fas fa-arrow-up fa-3x" id="arrowup"></i>
    </main>
<?php require_once('footer.php');
} else {
    header('location: index?error=You need permissions to see the content!');
} ?>