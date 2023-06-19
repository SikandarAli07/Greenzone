<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenzone Living</title>
    <link rel="apple-touch-icon" sizes="180x180" href="Greenzone-img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Greenzone-img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Greenzone-img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="Greenzone-img/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
     include($IPATH."nav.php");
      ?>

        <div class="welcome-container">
            <div class="welcome-text-container">
                <span class="welcome-text">Welcome</span>
                <span class="to">To</span>
                <h2 class="no-wrap">Greenzone Living.</h2>
                <div class="sub-text">
                    Join us to create a happy, healthy & peaceful lifestyle for you and your dear ones.
                </div>
            </div>
            <img class="girl-plant" src="Greenzone-img/girlplant.png" alt="girl-plant image">

        </div>
        <a href="Sign-up.php"><button class="color-btn signup-btn">SIGN UP NOW</button></a>
    </header>

    <main>

        <section class="what-section">
            <div class="highlighter">
                What is Green Zone Living?
            </div>

            <div>
                <video class="video" poster="Greenzone-img/black.webp" controls
                    src="video/ariana.mp4"></video>
            </div>
        </section>

        <section class="self-help-section">
            <div class="highlighter-r">
                Green Zone Self-Help Program
            </div>

            <div>
                <video class="video" poster="Greenzone-img/black.webp" controls
                    src="video/ariana.mp4"></video>
            </div>
        </section>

        <section class="help-section">
            <div class="highlighter">
                Help the Community with your Donations
            </div>
            <div class="help-section__container">
                <div class="help-section__fc">
                    <div class="help-section__lg-text">
                        Be the Reason of Someone's Smile!
                    </div>

                    <div>
                        <a href="Donate-now.php"><button class="color-btn donate-btn">Donate now</button></a>
                    </div>

                </div>
                <div class="help-section__fc2">
                    <img class="help-section__img" src="Greenzone-img/Layer 2.png" alt="donate image">
                    <img src="Greenzone-img/dots.png" alt="" class="dot">
                    <div class="help-section__sm-text">
                        Your donations will help the people in need whom can't afford therapy.
                    </div>
                </div>

            </div>
        </section>


        <section class="mobile-section">


            <div class="upper-container">
                <img src="Greenzone-img/upper.png" alt="" class="upper">
                <img src="Greenzone-img/middle.png" alt="" class="middle">
                <img src="Greenzone-img/lower.png" alt="" class="lower">
            </div>
            <div class="highlighter-r absolute">
                Download Green Zone Living Mobile App
            </div>
            <div>
                <img class="mobile-img" src="Greenzone-img/phone.png" alt="mobile image">
            </div>
            <div class="mobile-section__container">
                <div class="mobile-text">
                    Download app now
                </div>
                <div class="mobile__img-container">
                    <a href=""><img src="Greenzone-img/play.png" alt="" class="play"></a>
                    <a href=""><img src="Greenzone-img/appstore.png" alt="" class="app"></a>
                </div>
            </div>
        </section>

        <section class="book-section">
            <div class="highlighter">
                Download Green Zone Living Books
            </div>

            <div>
                <img src="Greenzone-img/books.png" alt="" class="books-img">
            </div>

            <div>
                <img src="Greenzone-img/white dots.png" alt="" class="white-dots">
            </div>

            <div>
                <img src="Greenzone-img/dots.png" alt="" class="green-dots">
            </div>

            <div>
                <button class="color-btn view-btn">View more</button>
            </div>

        </section>
    </main>

    <?php include($IPATH."footer.php"); ?>

    <script src="main.js"></script>
</body>

</html>