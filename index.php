<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Mongoal Login</title>
  </head>
  <body>
    <div class="container" style="text-align: center; color: white; padding: 10px;">
        <h1>Mongoal</h1>
        <p>Mongoal is a goal tracking app that focuses on improving you progress by tracking your success.</p>
    </div>

    <div class="container" style="text-align: center">

        <div class="row mb-5" style="background-color: white; padding: 2rem; border-radius: 5px;">
            <div class="col-xs-12 col-md-6">
                <h3>Register</h3>
                <form action="register.php" method="post">
                    <input type="text" name="NewUsername" id="NewUsername" placeholder="Create a Username">
                    <br> <br>
                    <input type="password" name="NewPassword" id="NewPassword" placeholder="Create a Password">
                    <br> <br>
                    <input type="submit" value="Register" class="btn btn-primary">
                </form>
            </div>
            <div class="col-xs-12 col-md-6">
                <h3>Login</h3>
                <form action="login.php" method="post">
                    <input type="text" size="" name="Username" placeholder="Username"id="Username">
                    <br> <br>
                    <input type="password" name="Password" placeholder="Password" id="Password">
                    <br> <br>
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
            </div>

        </div>

        <footer>
            <h6>Developed by Patrick Malara</h6>
		</footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
