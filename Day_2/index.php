<?php

/**
 * array and it's types
 * functions
 * additions in php
 */

// /*
//   * array types
//   * indexed array ==> index
//   * length of aray ==> count 

//   */
// // $arr=["php","os","DotNet"];
// // $arr[0]="PD";
// // echo count($arr)."<br>";
// // $myarr=array("ahmed","mohammed","ali");
// /** print ==> print_r , var_dump*/

// // print_r($arr);

// // for ($i=0; $i < count($arr); $i++) { 
// // echo $arr[$i]."<br>";
// //     # code...
// // } 

// ///       arrName       value
// // foreach ($arr as  $value) {
// //     # code...
// //     echo $value ."<br>";
// // }

// // deal with index in array 
// // index  ==> $value of each index    
// // foreach ($arr as $key=> $value) {
// //     # code...
// //     echo $key.":". $value ."<br>";
// // }
// // $arr=["php","os","DotNet"];
// // add elemnt in array
// // access to deal with array is ==> index
// // index ==> already exist ==> override
// //  index ==> not exist ==> add new element

// // $arr[2]="ai";
// // $arr[3]="UI";
// // // $arr[10]="x";
// // // print_r($arr);
// // // foreach ($arr as $key=> $value) {
// // //     # code...
// // //     echo $key.":". $value ."<br>";
// // // }
// // echo "************************* <br>";
// // for ($i=0; $i < count($arr); $i++) { 
// // echo $arr[$i]."<br>";
// //     # code...
// // } 

// // add elemt from start of array
// // shift 
// // array_unshift($arr,"aya",["alaa","fatma"]);
// // echo "array using unshift <br>";
// // print_r($arr);
// // echo "<br>****************************** <br>";
// // // add element  after last index of array
// // // array_push()
// // array_push($arr,"mohammed","omar","donia");
// // array_push($arr,[2,3,"true"]);
// // print_r($arr);

// // // remove element from array
// // // form first
// // echo "<br>****************************** <br>";

// // array_shift($arr);
// // echo "<br>array using shift <br>";
// // print_r($arr);
// // echo "<br>****************************** <br>";
// // // from end
// // array_pop($arr);

// // echo "array using pop <br>";
// // print_r($arr);
// // echo "<br>****************************** <br>";


// // merge between two arrays  ==> array_merge()

// $arr = ["php", "os", "DotNet", "open source"];
// $names = ["nada", "mohammed", "aml", "hager"];
// $newArr=$names+$arr;
// print_r($newArr);
// $newArr=array_merge($arr,$names);
// $newArr=array_merge($arr,$names,[true,"test"]);

// print_r($newArr)

// sort array  ===========> change in main array
// sort($arr);  // asec  
// reverse sort of array
// rsort($arr); // des
// print_r($arr) ;








// multi dimension array
// array ==> has another array
// [
//   1 2 3
//   4 5 6
//   12 10 9

// ]

// $arr = [
//     ["alaa", "fatma"],
//     ["php", "laravel"]
// ];

// // $arr[0][0];   // rows
// // $arr[0][1];    // columns
// // $arr[1][0];
// // $arr[1][1];
// // $arr[1][2];
// // for ($i=0; $i <count($arr) ; $i++) { 
// //     for ($j=0; $j <count($arr[$i]) ; $j++) { 
// //                  // r c
// //         echo $arr[$i][$j]."<br>";
// //     }
// //     echo "<br>********************** <br> ";
// // }


// // for each
// foreach ($arr as $value) {  // array
//     // print_r($value);
// // create row  
//     foreach ($value as $index => $arrValue) {
//         // data in each row
//         echo "$index : $arrValue  <br>";

//     }
//     echo "<br>********************** <br> ";

// }



// echo "<table border=1>";
// echo "<thead>";
// echo "<tr>";
// echo "<th>name  </th>";
// echo "<th> subject </th>";
// echo "<tr>";
// echo "</thead>";
// echo "<tbody>";

// foreach ($arr as $value) {  // array
//     // print_r($value);
//     //    echo "<br>";
//     echo "<tr>";
//     foreach ($value as $index => $arrValue) {
//         // echo "$index : $arrValue  <br>";
//         echo "<td>".$arrValue." </td>";
//     }
//     // echo "<br>********************** <br> ";
//     echo "</tr>";
// }

// echo "</tbody>";

/** Associative array
 * 
 * array ==> key => value
 */
// $arr=["nada",26,"cairo"];
// key => value
$arr=["name"=>"nada","gender"=>"female","address"=>"cairo"];
asort($arr);
arsort($arr);
print_r($arr);
// print keys
// print_r(array_keys($arr));
//  echo "<br>********************** <br> ";
// print values
// print_r(array_values($arr));

// forache ==> key => value

// foreach ($arr as $key => $value) {
//     # code...
//     echo"$key : $value <br>";
// // }
// $test = [[1, 2], [3, 4]];
// $test[0][0];  /// row ==> index
// $test[0][1];
// $test[1][0];
// $test[1][1];

// $arr = [

//     /**0 */
//     "row1" => ["name" => "nada", "age" => 26, "address" => "cairo"],
//     /**1 */
//     "row2" => ["name" => "mostafa", "age" => 21, "address" => "menoufia"],
//     /**2 */
//     "row3" => ["name" => "aya", "age" => 26, "address" => "helwan"],
//     /**3 */
//     "row4" => ["name" => "alaa", "age" => 22, "address" => "tanta"],
//     /**4 */
//     "row5" => ["name" => "abdAlrahman", "age" => 23, "address" => "alex"],

// ];

// $arr["row2"]["name"];
// $arr = [

//     /**0 */
//      ["name" => "nada", "age" => 26, "address" => "cairo"],
//     /**1 */
//      ["name" => "mostafa", "age" => 21, "address" => "menoufia"],
//     /**2 */
//      ["name" => "aya", "age" => 26, "address" => "helwan"],
//     /**3 */
//      ["name" => "alaa", "age" => 22, "address" => "tanta"],
//     /**4 */
//      ["name" => "abdAlrahman", "age" => 23, "address" => "alex"],

// ];

// $arr[2]["name"];
// // row  //  array
// // foreach ($arr as $key => $value) {
// //     # code...
// //     // print_r($key);
// //     // echo " : ";
// //     // print_r($value);
// //     // echo " <br> ";
// //     foreach ( $value as $key => $value) {
// //         # code...
// //          print_r($key);
// //          echo "  : ";
// //        print_r($value);
// //        echo "<br>";
// //     }
// //     echo "<br>************ <br>";
// // }


// echo "<table border=1>";
// echo "<thead>";
// echo "<tr>";
// echo "<th>Name  </th>";
// echo "<th> Age </th>";
// echo "<th> Address </th>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// foreach ($arr as $key => $value) { //row ==> array
  
//     echo "<tr>";
//     foreach ( $value as $key => $value) {
     
//         echo "<td>$value  </td>";
//         // print_r($value);
//      }
//      echo "</tr>";

   
   
   
// }
// echo "</tbody>";

// echo "</table>";
