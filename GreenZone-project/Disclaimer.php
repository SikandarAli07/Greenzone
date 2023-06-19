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
    <link rel="stylesheet" href="Disclaimer.css">
</head>

<body>
    <header>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
        include($IPATH . "nav.php");
        ?>
    </header>

    <main>

        <div class="container">
            <h1 class="large-text">
                Disclaimer
            </h1>

            <h2>
                Greenzone Living
            </h2>

            <div class="container__text">
                The information presented on this website is intended to be educational in nature and is not intended as a basis for diagnosis or treatment.The ideas and advice contained on this website are based on years of experience by Dr. Sohail and the Green Zone Team. This information is intended to provide public education and is not a replacement for careful medical evaluation and treatment by a qualified health care professional. Dr. Sohail and the Green Zone Team do not recommend changing any current medications or adding any new therapies without personally consulting a competent, licensed health practitioner. Dr. Sohail and the Green Zone Team disclaim any liability arising directly or indirectly from information contained on this website.
            </div>

            <h2>
                About Therapist
            </h2>

            <div class="container__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.
            </div>

            <h2>
                Volunteer Therapist
            </h2>

            <div class="container__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.
            </div>
        </div>
    </main>

    <?php
    include($IPATH . "footer.php");
    ?>
    <script src="main.js"></script>
</body>

</html>