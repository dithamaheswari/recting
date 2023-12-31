<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page | Recting Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-black">
    <main class="login">
        <a href="<?= BASEURL; ?>"><img src="<?= BASEURL; ?>assets/img/logo recting.webp" alt="Brand Logo" class="img-fluid mt-2 brand-logo login"> </a>                   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xxl-5">
                <div class="card-login mt-0 mb-5">
                        <div class="flasher-wrap w-100">
                            <?php Flasher::flash(); ?>
                        </div>
                        <h2 class="title text-center">Create Account</h2>
                        <form class="form d-flex flex-column" action="<?= BASEURL; ?>register/registerAction" method="post">
                            <div class="input-group d-flex flex-column">
                                <label for="username"><h5>Username</h5></label>
                                <input type="text" class="input" id="username" name="username" placeholder="Enter your username..">
                            </div>
                            <div class="input-group d-flex flex-column">
                                <label for="email"><h5>Email</h5></label>
                                <input type="text" class="input" id="email" name="email" placeholder="Enter your email..">
                            </div>
                            <div class="input-group d-flex flex-column">
                                <label for="password"><h5>Password</h5></label>
                                <input type="password" class="input" id="password" name="password" placeholder="Enter your password..">
                            </div>
                            <button type="submit" class="button-primary w-100 text-center" style="margin-top: 18px;">Register Account</button>
                        </form>
                        <hr>
                            <div class="text-light text-center">
                            <label><h6>Already have an account?</h6></label> <a href="<?= BASEURL; ?>login" class="link-redirect"> <strong>Login here</strong></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>