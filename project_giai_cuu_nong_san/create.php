
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        #message{
            margin-left: 169px;
        }

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

        </div>
    </div>
</nav>

<div class="container">

    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
            <label for="pwd">Import Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="importPassword">
        </div>
        <button type="submit" class="btn btn-primary" name="signup">Signup</button>
    </form>
</div>

</body>
</html>

<?php
include 'DataUser.php';
include 'User.php';



if($_SERVER['REQUEST_METHOD']=='POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $importPassword = $_POST['importPassword'];


    if (empty($username) || empty($password) || empty($importPassword)) {
        echo '<p id="message">Please enter username and password!';
        return $user;
    } elseif ($password != $importPassword) {
        echo '<p id="message">Password is not correct, please enter password!';
        return $user;
    }/*elseif ($username){
        echo "trung";
        return $user;
    }*/
    else
        $user = new  User($username, $password, $importPassword);
    DataUser::addUser($user);
        echo '<p id="message">Sign Up Success!!';

}

?>
