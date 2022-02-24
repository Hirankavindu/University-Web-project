<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="css/sign-in.css">
</head>

<body>
    <div class="form-Bg">
        <div class="form-header">
            <h1>EDU FOR YOU</h1>
            <h2>SIGN IN</h2>
            <p>Please Input Correct Details To Login</p>
        </div>

        <form name="form1" action="" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="username" required="required" />
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password" required="required" />
            </div>
            <div class="form-group">
                <input type="checkbox" id="cbx" class="inp-cbx" style="display: none;" />
                <label class="cbx" for="cbx">
                    <span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg>
                    </span>
                    <span>Remember me</span>
                </label>
                <a href="#" class="form-recovery">create new account</a>

            </div>

            <div class="form-group">
                <button type="submit" name="submit1" value="Login">Log In</button>
            </div>
        </form>

    </div>

    <div class="animation-area">
        <ul class="box-area">
            <li class="fa fa-plus"></li>
            <li></li>
            <li class="fa fa-plus"></li>
            <li></li>
            <li class="fa fa-plus"></li>
            <li></li>
            <li class="fa fa-plus"></li>
            <li></li>
            <li class="fa fa-plus"></li>
            <li></li>
        </ul>
    </div>


    <?php
    if (isset($_POST["submit1"])) {
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "lms");
        $count = 0;
        $res = mysqli_query($link, "select * from student_registration where username='$_POST[username]' && password='$_POST[password]'");
        $count = mysqli_num_rows($res);

        if($count==0)
        {
            ?>
              <div class="alert alert-danger col-lg-6 col-lg-push-3">
                  <strong style="color: white;">Invalid</strong> User name or password.
              </div>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
                window.location="home.php";
            </script>
               
            <?php

        }
        echo $count;
    }
    ?>

</body>

</html>