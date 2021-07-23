<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
        <title>Hiking Trail</title>
        <script src="validate.js"></script>
    </head>

<body background="assets/img/mountains.jpg" style="
    background-size: cover;
    background-attachment: fixed;
    backdrop-filter: blur(5px);  
">
        <div class="login">   
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/img-login.svg" alt="">
                </div>
            <div class="login__forms">
                <form action="sigin.php" class="login__registre" method="post" id="login-in" onchange="check();">
                        <h1 class="login__title">Sign In</h1>
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="username" id="username" class="login__input">                      
                        </div>
                        <b style="color: red; font-size: 12px;"><span id="usererror"></span></b>
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" id="pwd" class="login__input" name="userpwd">        
                        </div>
                        <b style="color: red;font-size: 12px;"><span id="passerror"></span></b>
                        <!--<a href="#" class="login__forgot">Forgot password?</a>-->
                        <div>
                            <input type="submit" value="Sign In" onclick="check();" class="login__button" id="h11" disabled>
                    </div>
                    <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <span class="login__signin" id="sign-up">Sign Up</span>
                        </div>
                    </form>
                    <form action="signnup.php" method="post" class="login__create none" id="login-up" onchange="check1();">
                        <h1 class="login__title">Create Account</h1>
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="signuser" id="signuser" class="login__input">
                        </div>
                        <b style="color: red; font-size: 12px;"><span id="usererror1"></span></b>
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Email" name="signemail" id="signmail" class="login__input">
                        </div>
                        <b style="color: red; font-size: 12px;"><span id="emailerror1"></span></b>
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="text" placeholder="Phone number" name="signphone" id="signphone" class="login__input" maxlength="10">
                        </div>
                        <b style="color: red; font-size: 12px;"><span id="phoneerror1"></span></b>
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="signpassword" id="signpassword" class="login__input">
                        </div>                       
                        <b style="color: red; font-size: 12px;"><span id="passerror1"></span></b>
                       <input type="submit" value="Sign Up" class="login__button" id="h22" disabled>
                        <div>
                            <span class="login__account">Already have an Account ?</span>
                            <span class="login__signup" id="sign-in">Sign In</span>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>