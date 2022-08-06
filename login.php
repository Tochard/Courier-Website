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
                    <div class="contact">
                         <form method="post" action="mail" class="form">
                            <div  class="inp">
                                <input type="email"  name="email" placeholder="Email" required="">
                            </div>
                            <div class="inp">
                                <input type="text"  name="name" placeholder="Name" required="">
                            </div>
                            
                            <div class="inp">
                                <button type="submit" name="submit">Sign In</button>
                            </div>
                            
                        </form>
                        <div class="cta"><p>Don't have an account? <span><a href="signup.php">Sign Up</a></span></p></div>
                    </div>
                </div>
                 
                </div>
            </section>
        </div>


<?php
    include_once "footer.php";
?>