<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/Simon.css">
</head>
<body>
<section>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div> 
    <div class="box">
        <div class="square" style="--i:0";></div>
        <div class="square" style="--i:1";></div>
        <div class="square" style="--i:2";></div>
        <div class="square" style="--i:3";></div>
        <div class="square" style="--i:4";></div>
        <div class="container">
            <div class="form">
                <h2>REGISTER</h2>
                <form action="<?= BASEURL; ?>/register/create" method="post">
                    <div class="inputBox">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="Confirm Password" name="password2" required>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Sign Up" name="submit">
                    </div>
                    <p class="forget">have an account ? <a href="<?= BASEURL; ?>/login">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
    </body>
    
</html>