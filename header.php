    <body>
        <header>
            <!-- navigation bar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <!-- logo -->
                <a class="navbar-brand ml-lg-5 pl-lg-5" href="index">
                    <img src="images/limelight_logo.svg" alt="logo">
                </a>

                <!-- burger menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- nav -->
                <div class="collapse navbar-collapse text-uppercase justify-content-center mr-5"
                    id="navbarsExampleDefault">
                    <ul class="navbar-nav mx-auto" id="myUL">
                        <li class="nav-item mr-3" id="index">
                            <a class="nav-link" href="index">Movies</a>
                        </li>
                        <li class="nav-item mr-3" id="theatres">
                            <a class="nav-link" href="theatres">Theatres</a>
                        </li>
                        <li class="nav-item mr-3" id="contact">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <?php require_once('perm.php'); ?>
                    </ul>

                    <!-- search -->
                    <form class="form-inline ml-lg-5">
                        <input class="form-control mr-sm-2 search-input text-center" type="text" placeholder="Search"
                            style="font-size: .9rem;">
                        <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </header>

        <!-- signup.php action feedback -->
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-dismissible bg-danger fade show text-center mx-auto mt-1" role="alert" id="alert">
            <?php echo $_GET['error']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } else if (isset($_GET['feed'])) { ?>
        <div class="alert alert-dismissible bg-success fade show text-center mx-auto mt-1" role="alert" id="alert">
            <?php echo $_GET['feed']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <!-- nsubscribe action feedback -->
        <?php } else if (isset($_GET['err'])) { ?>
        <div class="alert alert-dismissible bg-danger fade show text-white text-center mx-auto mt-1" role="alert" id="alert">
            <?php echo $_GET['err']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } else if (isset($_GET['msg'])) { ?>
        <div class="alert alert-dismissible bg-success fade show text-center mx-auto mt-1" role="alert" id="alert">
            <?php echo $_GET['msg']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>
        <!-- end of feedback -->

