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
    <link rel="stylesheet" href="Resources.css">
</head>

<body>
    <header class="resources-header">

        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
        include($IPATH . "nav.php");
        ?>

        <div class="resources__container">

            <div class="text-container">
                <h1 class="lg-text">
                    Greenzone Books
                </h1>

                <div class="flex">
                    <a href="#">
                        <div class="amazon">
                            Get more books on Amazon
                        </div>
                        <div>
                            <img src="Greenzone-img/arrow.png" alt="">
                        </div>
                    </a>
                </div>
            </div>

            <div class="books-container">
                <a href="#">
                    <img src="Greenzone-img/book1.png" alt="" class="book">
                </a>
                <a href="#">
                    <img src="Greenzone-img/book2.png" alt="" class="book">
                </a>
                <a href="#">
                    <img src="Greenzone-img/book3.png" alt="" class="book">
                </a>
                <a href="#">
                    <img src="Greenzone-img/book4.png" alt="" class="book">
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="download-section">

            <div class="download-container">
                <div class="a-container">
                    <h1>
                        Free downloadable books
                    </h1>
                    <a href="Greenzone-img/Bette.png" download class="a-flex">
                        <div class="amazon">
                            Greenzone activity book pdf download
                        </div>
                        <div>
                            <img src="Greenzone-img/download.png" alt="" class="download-img">
                        </div>
                    </a>
                    <a href="Greenzone-img/Bette.png" download>
                        <div class="amazon">
                            Greenzone activity book pdf download
                        </div>
                        <div>
                            <img src="Greenzone-img/download.png" alt="" class="download-img">
                        </div>
                    </a>
                    <a href="Greenzone-img/Bette.png" download>
                        <div class="amazon">
                            Greenzone activity book pdf download
                        </div>
                        <div>
                            <img src="Greenzone-img/download.png" alt="" class="download-img">
                        </div>
                    </a>
                    <a href="Greenzone-img/Bette.png" download>
                        <div class="amazon">
                            Greenzone activity book pdf download
                        </div>
                        <div>
                            <img src="Greenzone-img/download.png" alt="" class="download-img">
                        </div>
                    </a>
                    <a href="Greenzone-img/Bette.png" download>
                        <div class="amazon">
                            Greenzone activity book pdf download
                        </div>
                        <div>
                            <img src="Greenzone-img/download.png" alt="" class="download-img">
                        </div>
                    </a>
                </div>

                <div>
                    <img src="Greenzone-img/books-girl.png" alt="" class="books-girl">
                </div>
            </div>
            <div>
                <img src="Greenzone-img/download-rect.png" alt="" class="download-rect">
            </div>
        </section>

        <section class="video-section">


            <div class="resources__container">

                <div class="text-container">
                    <h1 class="lg-text">
                        Greenzone Videos
                    </h1>

                    <div class="flex">
                        <a href="#">
                            <div class="amazon">
                                watch more videos
                            </div>
                            <div>
                                <img src="Greenzone-img/arrow.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="video-container">
                    <div class="video-flex">
                        <video controls poster="Greenzone-img/black.webp" src="video/ariana.mp4" class="video"></video>
                        <div>
                            Title of video
                        </div>
                    </div>
                    <div class="video-flex">
                        <video controls poster="Greenzone-img/black.webp" src="video/ariana.mp4" class="video"></video>
                        <div>
                            Title of video
                        </div>
                    </div>
                    <div class="video-flex">
                        <video controls poster="Greenzone-img/black.webp" src="video/ariana.mp4" class="video"></video>
                        <div>
                            Title of video
                        </div>
                    </div>
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