<?php

session_start();

unset($_SESSION['LoggedInUser']);
unset($_SESSION['Fname']);
unset($_SESSION['Lname']);
unset($_SESSION['userID']);
echo header("Location: login.php");

// LOGOUT ACTIVITY