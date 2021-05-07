<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS file/Simon.css">
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
                <h2>LOGIN</h2>
                <form action="<?= BASEURL; ?>/login/signin" method="post">
                    <div class="inputBox">
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Sign In" name="submit">
                    </div>
                    <p class="forget">Forgot password ? <a href="#"  target="_self">Click Here</a></p>     
                    <p class="forget">Don't have an account ? <a href="<?= BASEURL; ?>/register" target="_self">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
    </body>
    
</html>