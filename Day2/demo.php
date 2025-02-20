<?php

/**
 * array and types of array
 * string
 * functions
 * tricks in php (use file in file , search )
 */

// include 'base.php';
// include 'functions.php'; 
// echo "<p class='text-success text-center fs-1'>  Demo </p>";
// test();
/***
 * variables constant => pi=22/7  ====> قيمته ثابته
 * 
 * define( string $name , $value [ bool $case_insensitive ])
 * /// ==> capital  => DATA_BASE_NAME
 * define("DATA_BASE_NAME","group1",true)
 */
///  variable  => age , Age
//  define("DATA_BASE_NAME","group1");
// echo  strlen(DATA_BASE_NAME),"<br>";
// echo DATA_BASE_NAME ."<br>";

/** 
 * variable of variable
 * $$varName=value

 */
// $x="test";
// $$x=5;
// echo $test,"<br>";
/**
 * isset
 * isset(): This function checks if a variable is set and is not null. It returns true if the variable exists and has a value other than null.
 * ===================================================
 * empty
 * empty(): This function checks if a variable is empty. It returns true if the variable doesn't exist, is null, an empty string "", 0, 0.0, "0", an empty array, or a variable declared with no value.
 * ========================================================
 * unset
 * The unset() function is used to destroy a variable or unset an array element. However, it does not destroy a function, as functions in PHP cannot be unset once defined.
 */
// $x="os";
// $y;
// /** is set */
// var_dump(isset($x)) ; // true
// echo "<br>";
// var_dump("y",isset($y)) ; // false
// echo "<br>"; 
// var_dump(isset($non)); // false
// echo "<br>";

/*     empty       */
// var_dump(empty($x)); // false  as it  exist
// echo "<br>";
// var_dump("y",empty($y));  // true
// echo "<br>";
// var_dump(empty($non)); //true
// echo "<br>";

/** un set  */
// unset($x);
// // var_dump($x);// error as it removed 
// echo "<br>";
// var_dump($x??"text");
// echo "<br>";

// $numbers = [1, 2, 3, 4, 5];
// unset($numbers[2]);
// // unset($numbers);// error undefined
// print_r($numbers); 

/**
 * Null Coalescing Operator 
 * The Null Coalescing Operator (??) in PHP
 *   The null coalescing operator (??) in PHP is used to check if a variable exists and is not null. If the variable is set and not null, it returns the variable's value. Otherwise, it returns the provided default value.

 *It is a shorthand for using isset() in conditional expressions.
 */

$y;
echo ($y ?? "yousef") . "<br>";

$first = null;
$second = null;
$third = "Hello, World!";

$value = $first ?? $second ?? $third ?? "Default Value";
echo $value . "<br>"; // Output: Hello, World!

// $users=["name"=>"ayaat","age"=>25];
// var_dump(array_keys($users));
// echo "<br>";
// var_dump(array_values($users));
// echo "<br>";
// foreach ($users as $key => $value) {
//* # code...
//     echo $key."<br>";
//     echo $value."<br>";
// }
// foreach ($users as $value ) {
//     # code...
//     echo $value."<br>";
//     // echo $value."<br>";
// }
