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
    <link rel="stylesheet" href="About.css">
</head>

<body>
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
        include($IPATH . "nav.php");
        ?>

        <h1 class="header__title">
            About Greenzone
        </h1>

        <div class="header__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis
            tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit
            sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora
            torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac
            scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel
            bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.

        </div>
    </header>

    <main>
        <section class="khalid-section">
            <h1 class="header__title">
                Greenzone Team
            </h1>
            <div class="khalid-rect relative">

                <div class="name-block">
                    <h1 class="relative__h1">
                        DR KHALID SOHAIL
                    </h1>
                    <div>
                        MB BS FRCP(C)
                    </div>
                </div>

            </div>



            <div class="khalid-text">
                Dr. Sohail, psychiatrist, poet, and writer, has a wide range of interests and passions. He received his
                degree in medicine from Khyber Medical College, Pakistan in 1974, and completed his residency in Psychiatry
                at Memorial University, Newfoundland in 1982. From 1983 to 1995 he worked in psychiatric hospitals in
                Newfoundland, New Brunswick and Ontario. In 1995 he left the hospital to open the Creative Psychotherapy
                Clinic in Whitby, Ontario.
            </div>

        </section>
        <section class="bette-section">
            <div class="bette-rect relative">
                <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                <div class="name-block2">
                    <h1 class="relative__h1">
                        Bette Davis
                    </h1>

                    <div>
                        RN, BN, MN
                    </div>
                </div>
            </div>

            <div class="bette-text">
                Bette Davis completed a Bachelor of Nursing in 1984 and later in 1993 received a Master of Nursing, both specializing in Mental Health / Psychiatry. Through the Master’s Program Bette was awarded a substantial grant to pursue her graduate research focused on developing and designing an advanced educational program for nurses.
            </div>
        </section>

    </main>

    <?php 
    include($IPATH . "footer.php");
    ?>
    <script src="main.js"></script>
</body>

</html>