<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="file:///C:\xampp\htdocs\courier\assets\css/all.css"> -->

    <title>Delivery Company</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <div class="pagecontainer">

        <!-- ***********************************header and nav barStart**************************************-->


        <div class="header">
            <nav>
                <div class="nav-head">
                    <div class="logo">

                        <img src="./assets/img/logo.png" alt="logo">
                    </div>
                    <button class="bt">
                        <div class="mobile-nav">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>

                        </div>
                        <div class="mobile-nav2">
                            <div class="line1"></div>
                            <div class="line2"></div>

                        </div>
                    </button>


                    <div class="navs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Service</a></li>
                            <li><a href="track.php">Track</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="active"><a style="color:#fff;" href="signup.php">Create An Account</a></li>
                            <li class="signup"><a href="login.php">Sign In</a></li>
                        </ul>

                    </div>
                </div>


            </nav>

            <div class="mobile-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="track.php">Track</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="signup.php" style="color: #347fff;">Create An Account</a></li>
                    <li><a href="login.php" style="color: #D31807;">Sign In</a></li>
                </ul>
            </div>

        </div>


        <script type="text/javascript">
            // console.log("good")
            const mobile_menu = document.querySelector(".mobile-menu"),
                menuBtn = document.querySelector(".bt"),
                mobile_nav = document.querySelector(".mobile-nav"),
                mobile_nav2 = document.querySelector(".mobile-nav2");


            menuBtn.addEventListener('click', () => {
                if (mobile_menu.style.display === 'none') {
                    mobile_menu.style.display = 'block';
                    mobile_nav.style.display = 'none';
                    mobile_nav2.style.display = 'block';
                } else {
                    mobile_menu.style.display = 'none';
                    mobile_nav.style.display = 'block';
                    mobile_nav2.style.display = 'none';
                }
            })
        </script>