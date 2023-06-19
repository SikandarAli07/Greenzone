<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenzone Living</title>
    <link rel="apple-touch-icon" sizes="180x180" href="Greenzone-img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Greenzone-img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Greenzone-img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="Greenzone-img/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Contact.css">
</head>

<body>
    <header class="contact-header">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
        include($IPATH . "nav.php");
        ?>

        <div class="contact-flex">

            <div class="cards">
                <div class="how">
                    How can we help you?
                </div>
                <div class="reach-us">
                    <div class="reach-text">
                        Reach us through
                    </div>

                    <div class="flex">
                        <img src="Greenzone-img/phone-black.png" alt="" class="img">
                        <div>Telephone</div>
                        <div class="lg-text">1223434555</div>
                    </div>

                    <div class="flex">
                        <img src="Greenzone-img/email-black.png" alt="" class="img">
                        <div>E-mail</div>
                        <div class="lg-text">
                            contact@gmail.com
                        </div>
                    </div>

                    <div class="flex">
                        <img src="Greenzone-img/location-black.png" alt="" class="img">
                        <div>Address</div>
                        <div class="lg-text">
                            213 Byron Street South, Whitby, ON Canada, L1N 4P7
                        </div>
                    </div>
                </div>
            </div>
            <img src="Greenzone-img/contact-girl.png" alt="" class="contact-girl">
        </div>

        <div>
            <img src="Greenzone-img/contact-rect.png" alt="" class="contact-rect">
            <img src="Greenzone-img/contact-rect2.png" alt="" class="contact-rect2">
        </div>
    </header>

    <main>
        <section class="or-section">
            <div class="or">
                Or
            </div>
            <div class="border"></div>

            <form action="">
                <div class="querry-text">
                    You can also write your queries here and we will get back to you!
                </div>

                <div class="form">
                    <input placeholder="Name" type="text" name="fname" id="fname">
                    <input placeholder="Email" type="email" name="email" id="email">
                    <textarea placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea>

                    <button class="color-btn submit-btn">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <?php
        include($IPATH . "footer.php");
        ?>
    <script src="main.js"></script>
</body>

</html>