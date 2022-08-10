<?php
include_once "header.php";
?>



<!-- ************************************************show room**********************************************-->

<div>
    <section class="showroom">
        <div class="st1">
            <div class="s1a">

                <h1>Deliveries for e-commerce and social commerce sellers</h1>
                <p>We help you with deliver goods and products to your customers anywhere.</p>
                <div class="action">
                    <div class="btn1"><a href="#">CREATE AN ACCOUNT</a></div>
                    <div class="btn2"><a href="#">SIGN IN</a></div>
                </div>

            </div>

            <div class="s1b">

            </div>
        </div>

    </section>
</div>



<!-- ************************************************TRACKING**********************************************-->


<div>
    <section>
        <div class="track">
            <div class="tracking">
                <form action="./dashboard/trackFrontend.php" method="post">
                    <input type="text" name="tracking_id" placeholder="TRACKING NUMBER">
                    <button type="submit" name="track">TRACK</button>
                </form>
            </div>


            <div class="tracknone">

            </div>
        </div>

    </section>
</div>


<!-- ************************************************ABOUT*********************************************-->

<div>
    <section class="abt">
        <div class="about">
            <div class="abt-us">
                <h2>ABOUT OUR COMPANY</h2>
                <h4>What We Are</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="abt-img">
                <img src="./assets/img/tt.png" alt="">
            </div>

        </div>
    </section>
</div>

<!-- ************************************************SLIDE**********************************************-->


<div>
    <section>
        <div class="slide">
            <marquee>
                <h2>Delivery Company...Deliveries for e-commerce and social commerce sellers</h2>
            </marquee>
        </div>

    </section>
</div>

<!-- ************************************************SERVICES*********************************************-->

<div>
    <section class="sv">
        <div>
            <h2>OUR SERVICES</h2>
            <h4>What We Do</h4>
            <div class="services">
                <div class="serv">
                    <h3>LOREM SERVICES</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                </div>
                <div class="serv">
                    <h3>LOREM SERVICES</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                </div>
                <div class="serv">
                    <h3>LOREM SERVICES</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                </div>


            </div>
        </div>
    </section>
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



<!-- ************************************************FAQ**********************************************-->
<div>
    <section class="sv">
        <div>
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
            <h4>Some Common Questions Our Customers Do Ask.</h4>

            <div class="wrapper">
                <!-- Accordion Heading One -->
                <div class="parent-tab">
                    <input type="radio" name="tab" id="tab-1" checked>
                    <label for="tab-1">
                        <span>Accordion Heading One</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
                    </div>
                </div>

                <!-- Accordion Heading Two -->
                <div class="parent-tab">
                    <input type="radio" name="tab" id="tab-2">
                    <label for="tab-2">
                        <span>Accordion Heading Two</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
                    </div>
                </div>

                <!-- Accordion Heading Four -->
                <div class="parent-tab">
                    <input type="radio" name="tab" id="tab-3">
                    <label for="tab-3">
                        <span>Accordion Heading Four</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
                    </div>
                </div>

                <!-- Accordion Heading Four -->
                <div class="parent-tab">
                    <input type="radio" name="tab" id="tab-6">
                    <label for="tab-6">
                        <span>Accordion Heading Four</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit. Quam, repellendus facere, id porro magnam blanditiiss quoteos dolores ratione quidem ipsam esse quos pariatur, repellat obcaecati!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- ************************************************FOOTER**********************************************-->
<?php
include_once "footer.php";
?>