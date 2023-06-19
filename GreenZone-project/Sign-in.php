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
    <link rel="stylesheet" href="Sign-in.css">
</head>

<body>
    <header class="signin-header">
        <div>
            <img src="Greenzone-img/main-logo.png" alt="" class="greenzone-logo">
        </div>

        <div>
            <img src="Greenzone-img/signin-girl.png" alt="" class="signin-girl">
        </div>
    </header>

    <section class="signin-section">
        <div class="flex">
            <div class="dont">
                Don’t have an account?
            </div>

            <a href="Sign-up.php">
                <button class="color-btn">
                    Sign up
                </button>
            </a>
        </div>

        <div class="container">
            <h1>
                Hello,
            </h1>
            <div class="fc">
                <h1>
                    Welcome back!
                </h1>
                <span>to the Green Zone Living App.</span>
            </div>

            <form action="">
                <div class="form-group">
                    <div class="login">
                        login
                    </div>
                    <div>
                        <label for="email">
                            Email
                        </label>
                    </div>
                    <input required type="email" class="form-control" id="email" name="email">
                    <div>
                        <label for="password">
                            Password
                        </label>
                    </div>
                    <div class="relative">
                        <input required type="password" class="form-control" name="password" id="password">
                        <img src="Greenzone-img/eye-close.png" alt="" class="eye" id="eye">
                    </div>

                    <a href="" class="sm-text">
                        Forgot your password?
                    </a>

                    <div class="login-text">
                        login as
                    </div>

                    <div class="flex-btn">
                        <a href="user-portal/home.php" class="color-btn">User</a>
                        <a href="" class="color-btn">Mental Health professional</a>
                    </div>

                    <div class="flex">
                        <div class="login-text">
                            or Login With
                        </div>
                        <div class="flex-btn">
                            <a href="">
                                <img src="Greenzone-img/google.png" alt="">
                            </a>
                            <a href="">
                                <img src="Greenzone-img/linkedin2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <script src="main.js"></script>
</body>
</html>