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
                <h4>Admin Login</h4>

                <div class="contact">
                    <form method="post" action="./phpscripts/adminlogin.php" class="form">
                        <div class="inp">
                            <input type="text" name="username" placeholder="Admin Username" required="">
                        </div>
                        <div class="inp">
                            <input type="password" name="password" placeholder="Password" required="">
                        </div>

                        <div class="inp">
                            <button type="submit" name="login">Sign In</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>
</div>


<?php
include_once "footer.php";
?>