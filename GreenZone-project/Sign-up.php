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
    <link rel="stylesheet" href="Sign-up.css">
</head>

<body>
    <header class="signup-header">
        <div>
            <img src="Greenzone-img/main-logo.png" alt="" class="greenzone-logo">
        </div>
        <div>
            <img src="Greenzone-img/signup-man.png" alt="" class="signup-man">
        </div>
    </header>

    <section class="signup-section">
        <div class="flex">
            <div class="dont">
                already have an account?
            </div>

            <a href="Sign-in.php">
                <button class="color-btn">
                    Sign in
                </button>
            </a>
        </div>

        <div class="container">
            <h1>
                Hello,
            </h1>
            <div class="fc">
                <h1>
                    Welcome!
                </h1>
            </div>

            <form action="#" method="get">
                <div class="form-group">
                    <div class="login">
                        Register your account
                    </div>
                    <div>
                        <label for="fname">
                            First name
                        </label>
                    </div>
                    <input required type="text" class="form-control" id="fname" name="fname">
                    <div>
                        <label for="lname">
                            Last name
                        </label>
                    </div>
                    <input required type="text" class="form-control" id="lname" name="lname">
                    <div>
                        <label for="username">
                            User name
                        </label>
                    </div>
                    <input required type="text" class="form-control" id="username" name="username">
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
                        Register as
                    </div>

                    <div class="flex-btn">
                        <a href="user-portal/home.php" class="color-btn">User</a>
                        <a href="" class="color-btn">Mental Health Professional</a>
                    </div>

                    <div class="flex">
                        <div class="login-text">
                            create account with
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