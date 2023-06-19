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
    <link rel="stylesheet" href="Greenzone-stories.css">
</head>

<body>
    <header class="stories-header">

        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
        include($IPATH . "nav.php");
        ?>

        <div class="stories-div">
            <h1>
                Greenzone Stories
            </h1>

            <img class="h1-rect" src="Greenzone-img/h1-rect.png" alt="">
        </div>

        <div class="container">
            <div class="stories-text">
                A central feature of the Green Zone Book Series has been people sharing their stories about their
                journey
                from their Red Zone existence to a Green Zone lifestyle. Individuals who have read the books have often
                spontaneously shared their journey with us in letters and e-mails, during social functions and therapy
                sessions. So when we began to work on designing a website, we felt it would be valuable and appropriate
                to
                provide readers with the opportunity to share their Green Zone Stories. Sohail and I also felt it would
                be
                fitting to begin with our own stories as an invitation and the beginning for others to share theirs.
                <br>
                <br>
                So please share with us how using the Green Zone Model in your everyday life, in your romantic life or
                in
                your workplace has affected you. If you send it to me at info@greenzoneliving.ca I will make sure it
                gets on
                the website.
                <br>
                <br>
                Yours in the Green,
                Bette Davis
            </div>
        </div>

        <div class="listen-text">
            Listen to Greenzone stories
        </div>
    </header>

    <main>
        <section class="audio-section">

            <div class="audio-card-container">
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Bette's Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Sohail’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>David’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Chris’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Frank’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Sarah’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>
                <div class="audio-card">
                    <div class="audio-container">
                        <div>
                            <img src="Greenzone-img/Bette.png" alt="" class="bette-img">
                        </div>

                        <figure>
                            <figcaption>Susan’s Greenzone Story</figcaption>
                            <audio controls controlist="nodownload" src="audio/Phir Aur Kya Chahiye Zara Hatke Zara Bachke 320 Kbps.mp3" class="mp3"></audio>
                        </figure>
                    </div>


                    <a href="#" class="read-story">
                        Read full story
                    </a>
                </div>



            </div>
        </section>
    </main>

    <?php
    include($IPATH . "footer.php");
    ?>
    <script src="main.js"></script>
</body>

</html>