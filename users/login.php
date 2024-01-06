<?php
require_once 'config.php';

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../logo.svg" type="image/x-icon" style="width: 89px; height: 74px;">
</head>

<body>
    <div class="login-wrapper">

        <div class=" box-image box-col">
            <img src="img/sideimage.jpg" alt="sideimage">
        </div>
        <div class="box-col">
            <div class="box-form">
                <div class="inner">
                    <div class="form-head">
                        <div class="title">
                            Login to Your Account
                        </div>
                        <div class="form-group">
                            <div class="label-text">Email</div>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <div class="label-text">Password</div>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-button">
                            <div class="check-action">
                                <input type="checkbox" class="check">
                                <span class="name">Remember Me</span>
                            </div>
                            <!-- <a href="reset-password" class="link">Forgot Password?</a> -->
                        </div>
                        <div class="actions">
                            <button onclick="location.href ='mail';" class="btn btn-submit">Login Now</button>
                            <button onclick="location.href='<?php echo $client->createAuthUrl(); ?>'" class="btn btn-google">
                                <span class="icon">
                                    <img src="img/google.png" alt="google">
                                    Or Sign-in with Google
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-register">
                Don't have an account? <a href="<?php echo $client->createAuthUrl(); ?>" class="link">Join free Today!</a>
            </div>
        </div>
    </div>

</body>

</html>