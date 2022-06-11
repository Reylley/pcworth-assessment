<?php


if(!isset($_SESSION)){
  session_start();
}


include("connect.php");


if(isset($_POST['login'])){
    $username = $_POST['usernam'];
    $password = $_POST['passwor'];


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $user = $connect->query($sql) or die($connect->error);

    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | PC WORTH ASSESSMENT with PHP</title>
    <link rel="shortcut icon" href="pcworthlogo.jpg" type="image/x-icon">
    <style>
        body{
            background: #1B2430;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PC WORTH ASSESSMENT with PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item text-bold">
          <a class="nav-link active" aria-current="page" href="index.php">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                  <?php

                    if(isset($_POST['login'])){
                      $username = $_POST['usernam'];
                      $password = $_POST['passwor'];


                      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

                      $user = $connect->query($sql) or die($connect->error);

                      $row = $user->fetch_assoc();
                      $total = $user->num_rows;

                      if($total > 0){
                        $_SESSION['LoggedInUser'] = $row['username'];
                        $_SESSION['Fname'] = $row['first_name'];
                        $_SESSION['Lname'] = $row['last_name'];
                        $_SESSION['Pword'] = $row['password'];
                        $_SESSION['userID'] = $row['ID'];
                  
                        echo header("Location: index.php");
                      }
                        else{
                          echo "<p class='text-danger text-center p-2 bg-warning rounded'>No user found!</p>";
                        }
                    }
                  
                  ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="usernam" class="form-control" placeholder="Enter username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="passwor" class="form-control" placeholder="Enter password" autocomplete="off">
                        </div>
                        <br>
                        <div class="form-group text-center">
                          <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        <hr>
                        <div class="form-group text-center">
                          <p>Don't have an account yet? <a class="text-decoration-none" href="register.php">Register now!</a></p>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>

<!-- LOGIN PAGE -->