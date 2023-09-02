<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['worker_name'])){
    header('location:login.blade.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilled Worker</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div>
        <div>
            <h3>hi, Artisan!</h3>
            <h1>welcome <span><?php echo $_SESSION['worker_name']?></span></h1>
            <p>this is an Skilled Worker page</p>

            <a class="btn btn-primary btn-lg btn-block" type="submit" href="login.blade.php" class="btn">login</a>
            <a class="btn btn-primary btn-lg btn-block" type="submit" href="register.blade.php">register</a>
            <a class="btn btn-primary btn-lg btn-block" type="submit" href="logout">logout</a>
            
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>