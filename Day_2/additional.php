<?php 
/** use any thing in file php in another file */
       // path of file
// include 'functions.php';
// include("../Day1/index.php");
include 'bootstrap.php';
include 'navbar.php';
// include ('functions.php');
// echo factorial(5)."<br>";

echo "<h1 class='text-success fs-1 text-center '> Hello  </h1>";

// z();

// constant variable ==> all characheters capital
// $dbConnection ==> 
// define("DATA_BASE_NAME","OS_Data");
// echo DATA_BASE_NAME;

// const DATA_BASE_NAME="test";
// echo DATA_BASE_NAME;


// variable of variable
// 

// null coalescing operator ??  // alternative isset()
// $y ;
// ;
// echo $y ?? "deafault value" ;
/**
 * isset()==> true ==> variabla has value , is exist
 * empty ==> true ==> variable not exist , empty ==> null
 * has no value , 0 ,0.0 , "","0"
 * 
 * unset ==> remove ,destroy variable
 */


// $name=null;
// $w;
// $w=0;
// $w="0";
$w="ayaat";
// $age=null;
// $value= $name ?? $age?? "default value" ;
// // echo $value;
// // var_dump(isset($name)) ;
// // var_dump(isset($w)) ;

var_dump(empty($w));

unset($w);
var_dump(empty($w));
?>