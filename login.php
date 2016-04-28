<?php

if(isset($_POST['user'])){

    $int = 36000;

    if($_POST['user'] == 'admin'){
        setcookie("user","admin",time() + $int);
        header( 'Location: admin.php' ) ;
    }elseif ($_POST['user'] == 'plumber'){
        setcookie("user","plumber",time() + $int);
        header( 'Location: profile.php' ) ;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plumbers</title>

    <?php include_once("include_css.php"); ?>

</head>

<body style="background:#F7F7F7;">

<div class="container-fluid">

    <div id="wrapper">

        <div id="login" class="animate form">
            <section class="login_content">
                <form method="post" action="login.php">
                    <h1>Login Form</h1>
                    <divv>
                        <input name="user" type="text" class="form-control" placeholder="Username" required="" />
                    </divv>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-default btn-lg submit">
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                    <br />
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <a href="index.php">
                                <h1><i class="fa fa-rocket" style="font-size: 26px;"></i> Ceredigion Plumber Collection</h1>
                            </a>
                        </div>
                    </div>

                </form>

            </section>

        </div>
    </div>
</div>

<?php include_once("footer.php"); ?>
