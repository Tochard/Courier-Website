<?php
include_once "header.php";
?>

<div>
    <section class="sv ct ">
        <div class="cont reg ree">


            <div class="re">
            </div>
            <div class="rt">
                <h2>SIGN IN</h2>
                <h4>Login To Your Acount</h4>
                <?php

                if (isset($_SESSION['status'])) {
                    echo "<p style='color:green; font-weight: bold; padding:10px; font-size:18px; '> " . $_SESSION['status'] . " </p>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="contact">
                    <form method="post" action="./phpscripts/login.php" class="form">
                        <div class="inp">
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="inp">
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>

                        <div class="inp">
                            <button type="submit" name="login">Sign In</button>
                        </div>

                    </form>
                    <div class="cta">
                        <p>Don't have an account? <span><a href="signup.php">Sign Up</a></span></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<?php
include_once "footer.php";
?>