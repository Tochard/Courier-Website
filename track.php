<?php
include_once "header.php";
?>


<!-- ************************************************DESC*********************************************-->
<div class="desc">
    <h1>Track</h1>
</div>

<!-- ************************************************TRACK**********************************************-->

<div>
    <section class="sv tr">
        <div class="cont trk">
            <h2>TRACK</h2>
            <h4>Enter Tracking ID</h4>
            <div class="contact">
                <form method="post" action="./dashboard/trackFrontend.php" class="form">
                    <div class="inp">
                        <input type="text" name="tracking_id" placeholder="Tracking ID" required="">
                    </div>

                    <div class="inp">
                        <button type="submit" name="track">Track</button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</div>



<?php
include_once "footer.php";
?>