<?php
include_once "header.php";
?>

<!-- ************************************************DESC*********************************************-->
<div class="desc">
    <h1>Contact Us</h1>
</div>


<!-- ************************************************CONTACT FORM**********************************************-->

<div>
    <section class="sv ct">
        <div class="cont">
            <h2>CONTACT US</h2>
            <h4>Get In Touch With Us</h4>
            <div class="contact">
                <form method="post" action="./phpscripts/mailto.php" class="form">
                    <div class="inp">
                        <input type="text" name="name" placeholder="Name" required="">
                    </div>
                    <div class="inp">
                        <input type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="inp">
                        <input type="text" name="subject" placeholder="Subject" required="">
                    </div>
                    <div class="inp">
                        <textarea name="msg" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="inp">
                        <button type="submit" name="submit">Send Now</button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</div>



<?php
include_once "footer.php";
?>