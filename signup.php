<?php
session_start();
include_once "header.php";
?>




<div>
    <section class="sv ct ">
        <div class="cont reg ree">
            <div class="rt">
                <h2>SIGN UP</h2>
                <h4>Create An Acount With Us</h4>
                <?php

                if (isset($_SESSION['status'])) {

                    echo '<script>
                                    swal({
                                  title: Error,
                                  icon: "error",
                                  button: "Ok",
                                });
                            </script>';
                    echo "<p style='color:red; text-align:center; font-weight: bold; padding:10px; font-size:18px; '> " . $_SESSION['status'] . " </p>";
                    unset($_SESSION['status']);
                } elseif (isset($_SESSION['success'])) {
                    echo '<script>
                                    swal({
                                  title: "Sign Up Successful",
                                  text: "Login Now",
                                  icon: "success",
                                  button: "Ok",
                                });
                            </script>';

                    unset($_SESSION['success']);
                }
                ?>
                <div class="contact">
                    <form method="post" action="./phpscripts/signup.php" class="form">
                        <div class="inp">
                            <input type="text" name="name" placeholder="Fullname" required="">
                        </div>
                        <div class="inp">
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="inp">
                            <input type="text" name="phone" placeholder="Phone Number" required="">
                        </div>
                        <div class="inp">
                            <input type="text" name="country" placeholder="Country" required="">
                        </div>
                        <div class="inp">
                            <input type="text" name="address" placeholder="Address" required="">
                        </div>
                        <div class="inp">
                            <input type="password" name="password" placeholder="Create Password" required="">
                        </div>

                        <div class="inp">
                            <button type="submit" name="signup">Sign Up</button>
                        </div>

                    </form>
                    <div class="cta">
                        <p>Already have an account? <span><a href="login.php">Sign In</a></span></p>
                    </div>
                </div>
            </div>

            <div class="re">
            </div>

        </div>
    </section>
</div>


<?php
include_once "footer.php";
?>