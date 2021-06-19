<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/project_giai_cuu_nong_san/index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li style="color: antiquewhite;margin-top:16px" >
                    <?php
                    session_start();
                    echo 'hello ' . $_SESSION['username'];
                    if ($_POST['username'] == 'POST') {
                        session_destroy();
                        header('http://localhost/project_giai_cuu_nong_san/index.php');
                    }
                    ?> </li>
                <li><a href="login_and_create.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li style="color: antiquewhite;"><a href="index.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>





</body>
</html>