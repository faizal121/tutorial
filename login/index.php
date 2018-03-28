<?php
session_start();
//session_register("salah");
ini_set('display_errors', 0);
if ($_SESSION["salah"] >= 3){
    header("location:alert.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Login</title>
        <link rel="icon" href="Assets/image/Gmail-icon.png">
        <link rel="stylesheet"href="Assets/css/bootstrap.css">
        <link rel="stylesheet"href="Assets/css/floating-labels.css">

        <script src="Assets/js/jquery.min.js"></script>
        <script src="Assets/js/popper.min.js"></script>
        <script src="Assets/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <form id="frm01" name="frm01" action="login.php" method="POST" class="form-signin">
            <div class="mb-8 modal-lg loginmodal-container">
                <div class="mb-8 text-center mb-4">
                    <h1>Sign In</h1>
                    <img  class="mb-4" width="110" height="110" src="Assets/image/login.png">     
                </div> 
                <div class="form-label-group">
                    <input class="form-control" type="email" name="email"id="email" 
                           placeholder="email address" 
                           required="yes" autofocus="yes" autocomplete="no">
                    <label for="email">Email Address</label>
                </div>
                <div class="form-label-group">
                    <input class="form-control" type="password" name="password" id="password" 
                           placeholder="password" 
                           required="yes"autofocus="yes" autocomplete="no" >
                    <label for="password">Password</label>
                </div>
                <button  class="btn btn-lg btn-primary btn-block" type="submit"
                         data-toggle="modal" data-target="#DialogModalKu">
                    <img class="mb-8" width="27" height="27" src="Assets/image/gem.png"> 
                    Sign in </button>                
            </div>
        </form>
    </body>
</html>
