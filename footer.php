</main>
<footer class="pt-5 bg- text-white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md py-2">
                <ul class="list-group">
                    <a class="w-75 pb-1" href="index">
                        <img src="images/limelight_logo.svg" alt="logo">
                    </a>
                    <p>Opening hours:</br>
                        Mon - Sat | 10am - 10pm</br>
                        Sun | 12am - 9pm</p>
                    <p>Main office:</br>
                        Edinburgh College </br>
                        24 Milton Rd E </br>
                        Edinburgh</p>
                </ul>
            </div>
            <div class="col-md py-2">
                <ul class="list-group">
                    <h4 class="mb-3">Customer Service</h4>
                    <a href="#">Frequently Asked Questions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Returns</a>
                    <a href="#">Payment methods</a>
                </ul>
            </div>
            <div class="col-md py-2">
                <ul class="list-group">
                    <h4 class="mb-3">Legal</h4>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy & Cookies</a>
                </ul>
            </div>
            <div class="col-md py-2">
                <ul class="list-group">
                    <h4 class="mb-3">Social</h4>
                    <!-- subscribe form -->
                    <form class="form-inline" action="includes/subscribe.inc.php" method="post">
                        <p>Subscribe to our newsletter!</p>

                        <!-- action feedback from newsletter.php -->
                        <?php if (isset($_GET['err'])) { ?>
                            <p class='text-danger'><?php echo $_GET['err']; ?></p>
                        <?php } else if (isset($_GET['msg'])) { ?>
                            <p class='text-success'><?php echo $_GET['msg']; ?></p>
                        <?php } ?>

                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="email" placeholder="e-mail address" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                            <button class="btn btn-pink text-white" type="submit" name="submit" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 text-center py-2">
                <a href="#" target="_blank"><i class="fab fa-facebook-square fa-2x text-pink px-2"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter-square fa-2x text-pink px-2"></i></a>
            </div>
            <div class="col-12 text-center py-2">
                <a class="text-center text-muted" href="https://stanbratuszewski.org/">Copyrights &copy Stan Bratuszewski <?php echo date('Y'); ?></a>
            </div>
        </div>
    </div>
</footer>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="scripts/main.js"></script>
</body>

</html>