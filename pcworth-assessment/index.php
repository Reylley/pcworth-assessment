<?php

if(!isset($_SESSION)){
  session_start();
}

if(isset($_SESSION['LoggedInUser']) && isset($_SESSION['Fname']) && isset($_SESSION['Lname']) && isset($_SESSION['userID'])){
  
}else{
  echo header("Location: login.php");
}


include("connect.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PC WORTH ASSESSMENT with PHP</title>
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
    <a class="navbar-brand" href="#">PC WORTH ASSESSMENT with PHP</a>
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
                    <h4 class="text-center">Profile Page</h4>
                </div>
                <div class="card-body">
                    <div>
                        <img src="avatar.png" alt="" style="width: 120px; margin-left:240px">
                    </div>
                    <hr>
                    <div class="row">
                          <?php

                              if(isset($_SESSION['LoggedInUser']) && 
                              isset($_SESSION['Fname']) && isset($_SESSION['Lname']) &&
                              isset($_SESSION['userID'])){?>
                              <div class="col">
                                <h4 class="text-center">User ID :</h4>
                              </div>
                              <div class="col">
                                <p class="text-center"> <?php echo $_SESSION['userID']; ?></p>
                              </div>
                                <?php
                              }else{
                                echo "User ID";
                              }
                          ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php
                        
                        if(isset($_SESSION['LoggedInUser']) && 
                          isset($_SESSION['Fname']) && isset($_SESSION['Lname']) &&
                          isset($_SESSION['userID'])){?>
                            <div class="col">
                              <h4 class="text-center">Username :</h4>
                            </div>
                            <div class="col">
                              <p class="text-center">  <?php echo $_SESSION['LoggedInUser']; ?></p>
                            </div>

                            <?php
                        }else{
                          echo "Guest Username?";
                        }
                        ?>

                    </div>
                    <br>
                    <div class="row">
                        <?php
                        
                        if(isset($_SESSION['LoggedInUser']) && 
                          isset($_SESSION['Fname']) && isset($_SESSION['Lname']) &&
                          isset($_SESSION['userID'])){?>
                            <div class="col">
                              <h4 class="text-center">Firstname :</h4>
                            </div>
                              <div class="col">
                              <p class="text-center"> <?php echo $_SESSION['Fname']; ?></p>
                              </div>
                            <?php
                        }else{
                          echo "Guest first name?";
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php
                        
                        if(isset($_SESSION['LoggedInUser']) && 
                          isset($_SESSION['Fname']) && isset($_SESSION['Lname']) &&
                          isset($_SESSION['userID'])){?>
                            <div class="col">
                              <h4 class="text-center">Lastname :</h4>
                            </div>
                            <div class="col">
                              <p class="text-center"><?php echo $_SESSION['Lname']; ?></p>
                            </div>
                            <?php
                        }else{
                          echo "Guest last name?";
                        }
                        ?>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                  <div class="row">
                    <div class="col">
                       <a href="update.php?ID=<?php echo $_SESSION['userID'] ?>" class="btn btn-success btn-block">Edit Profile</a>
                    </div>
                    <div class="col">
                        <a href="logout.php" class="btn btn-warning btn-block">Logout</a>
                    </div>
                  </div>
                </div>
                <br>
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
<!-- HOME PAGE -->