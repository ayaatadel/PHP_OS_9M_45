<?php
// include('connection1.php');
require('connection.php');
/**
 * include
 * require
 */
echo "<h1 class='text text-center'> Server Start </h1>";

var_dump($_POST);
if (isset($_POST['btnRegister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    /*** VALIDATION ON INPUT */
    //1- ckeck name pattern
    $namePattern = "/^[a-zA-Z ]{3,}$/";
    // preg_match==> perform regular expression => check($namePattern,$name)
    if (!preg_match($namePattern, $name)) {
        header("location:register.php?message=Name must be character and must be more than 3 Characters");
        exit;
    }
    //1- ckeck password pattern
    $passwordPattern = "/^[0-9]{8,15}$/";
    // preg_match==> perform regular expression => check($passwordPattern,$password)
    if (!preg_match($passwordPattern, $password)) {
        header("location:register.php?message=password must be more than 8 Characters and less than 15 characters");
        exit;
    }
    //3- check email pattern
    /**
     * your pattern
     * php ==> pattern email ==> filter_var 
     */

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?message=email must have @ and .com ");
        exit;
    }
    /** ecrypted password */
    $encPassword = md5($password);

    /** Check email exist or not */
    $checkEmail = "SELECT * FROM `users` WHERE email='$email'";
    $emailQuery = $connection->prepare($checkEmail);  // emailQuery
    $emailQuery->execute();

    //** result ==> one row  */
    $result = $emailQuery->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        header("location:register.php?message=Email already exist");
        exit;
    }

    $query = "insert into users (name,email,password)values('$name','$email','$encPassword')";
    $sqlQuery = $connection->prepare($query);  // sqlQuery
    $resposnse = $sqlQuery->execute();
    if ($resposnse) {
        header("location:login.php?Registermessage=Registered Successfully");
        exit;
    }
}


if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encPassword = md5($password);
    // $query = "select * from users where email='$email'and password='$password'";
    $query = "select * from users where email='$email'";
    $sqlQuery = $connection->prepare($query);  // sqlQuery
    $sqlQuery->execute();
    $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        if ($result['password'] == $encPassword) {
            header("location:profile.php?loginmessage=login Successfully");
            // header("location:profile.php?loginmessage=login Successfully&loginId=".$result['id']);
            // session_start();
            //** $_Session */
            $_SESSION['loginId']=$result['id'];
            setcookie("userEmail",$result["email"],time()+1*60*60,'/tools/');
             // 2025-02-26T10:21:14.032Z  // time ==> server
             

            /**
             * storage
             * local stroage // cliect side  ==> 
             * session storage  // server side==> life time ==> browser
             * cookie storage  // client + server
             */
            exit;
        } else {
            header("location:login.php?message=check your password");
            exit;
        }
    } else {
        header("location:login.php?message=email not exist check your email ");
    }
//////////////////////////////////////// if check on email and password both
    // if (!$result) {
    //     header("location:login.php?message=check your password Or email");
    //     exit;
    // }
}
