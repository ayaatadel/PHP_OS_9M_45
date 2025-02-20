<?php 
/**
 * Indexed Array
 * Multi dimension Array
 * Associative Array
 * array=> data => store multi value

 */

 // write array  (define variable as array)=> 
//  $varArr=[1,2,3];
//  // print array => var_dump , print_r
//  print_r($varArr);
//  echo "<br>";

//  $myArr=array("zy0","ayaat","tasneem","hazem");
//   print_r($myArr);

// access array => index => Indexed Array 
// echo $myArr[0] ,"<br>";

//print array elements => loop => for , while , do-while ,foreach
// get length => array => count ()=>size of  array

// echo count($myArr) ,"<br>";
// for($i=0;$i<count($myArr);$i++)
// {
//     echo $myArr[$i] ,"<br>";
// }
// foreach ($myArr as $var=>$data) {
//     echo " value of $var : ",$data ,"<br>" ;
// }

// $varArr=[1,2,"ayaat",false,2.5];
// $myArr=[[1,2],6,9];
// multi dimension array => all values=>array
// $myArr=[["ahmed",25],["Mahmoud",24],["ayat",15]];

// foreach ($myArr as $value) {
//     var_dump($value);
//     echo "<br>";
//     foreach ( $value as  $data) {
//         echo "$data <br>";
//         # code...
//     }
//     // echo "<br>";
//     # code...
// }

/** Associative array => array: key=>value  (Key)*/

// $users=[["name"=>"ayaat","age"=>25],["name"=>"rehab","age"=>25]];
// // echo $users[0]["name"] ,"<br>";

// echo"<table class='table border'> <thead><tr> <th> Name</th> <th> age</th></tr> </thead>";
// foreach ($users as $key => $value) {
//     # code...
//     // print_r($value) ;
//     // echo "<br> ";
//     echo"<tr>";
//     foreach ($value as $key => $data) {
//         echo"<td> $data</td>";
//         // echo " $key : $data  <br> ";
//         # code...
//     }
//     echo"</tr>";
// }
// echo "</table>"


/**** add element in array */
/** 1- length => array => add
 *  array_push() => add => end of array
 * 
 * /// start of array => unshift
 */

 /*** delete element from array */
 /*** array_pop() => delete from end of array
  *    // start of array => shift
  */
  $arr=[1,5,"ayaat","eman","fhdsld",55];

  // array_pop($arr);
  // print_r($arr);
  // echo"<br>";
  // array_shift($arr);
  // print_r($arr);
  
  // array_push($arr,6,5);
  // $arr[10]="kkskdfkds";
  // $arr[8]="hello 8";
  // array_unshift($arr,"mahmoud");
  // array_push($arr,555,"nada");
  // print_r($arr);
  // echo count($arr);
  // echo"<br>";

  //
  // array_merge
// $newArray=array_merge($x,$y);
// echo "<br>array before sort <br> ";
// print_r($newArray);
// echo "<br>array after sort <br> ";
// asort($newArray);
// print_r($newArray)

 $users=["name"=>"ayaat","age"=>25];
   var_dump(array_keys($users));
   echo "<br>";
   var_dump(array_values($users));


   
///////////  array  /////////////////

//    0     1  2  3   4   5  => index
                    //    0  1
// $x=["ayaat",5,12,30,true,[1,2]];  // length => 6
// // // print array
// print_r($x);  // index of each value => value of index
// echo "*********************** <br> <br>";
// var_dump($x); // length of array ,index value =>datatype=>value
// index length dataType
// array    ==> index => 0   , length==> number of values of array

/** types of array
 * indexed array
 * multidimension array
 * associative array
 */

// indexed array  => [1,2,3]
// $x=[1,"ayaat",2];  // length=3
// print($x[0]);
// echo "<br>";
// print($x[1]);
// echo "<br>";
// print($x[2]);
// echo "<br>";
/*** get lenght of array ==> count($x==> name of array) */
// print(count($x));
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

///      add values to array  from last of array
// $x=[1,"ayaat",2];  // length=3
// $x[3]="ahmed";
// $x[]="shimaa";
// // $x[15]=15;
// $x[]="mec";
// print_r($x);
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

//  push
// array_push($x,15,16,"mahmoud","karas","yousef");
// // // array_push($x,[4,5]);

// print_r($x);
// echo "************************ <br>";
// for($index=0;$index<count($x);$index++)
// {
// print($x[$index]);
// echo "<br>";
// }

// remove elements from array  from last of array  // array_pop

// array_pop($x);
// array_pop($x);
// array_pop($x);
// 


// $x=[1,"ayaat",2];
// add elemnts of array from start  shift unshift
// array_unshift($x,"mec");
// print_r($x);  // mec 1 ayaat 2
// echo "<br>************************ <br>";
// remove elemts of array from start

// array_shift($x);
// array_shift($x);
// array_shift($x);
// print_r($x);  //2
// echo "<br>************************ <br>";

// merege between arrays
// $x=[1,"ayaat",2,5];
// $y=["mohamed","Shimaa","yousef","karas",100];
// $y=$x+$y;
// print_r($y);


// array_merge
// $newArray=array_merge($x,$y);
// echo "<br>array before sort <br> ";
// print_r($newArray);
// echo "<br>array after sort <br> ";
// asort($newArray);
// print_r($newArray)






/// multidimension array
// $x=[1,2,30];
// $x[1];
// row cols
// $arr=[[1,2],[25,30]];
// 00  01
// 10  11

// print($arr[0][0]);
// // echo "<br>";
// print($arr[0][1]);
// echo "<br>";
// print($arr[1][0]);
// echo "<br>";
// print($arr[1][1]);
// echo "<br>";
// $arr=[[1,2],[25,30]];
// for ($i=0; $i < count($arr); $i++) {
//     // [1,2]    [25,30]
//     # code...
//     // print($arr[$i]);
//     // print_r($arr[$i]);
//     for ($j=0; $j <count($arr[$i]) ; $j++) { 
//         # code...
//        print ($arr[$i][$j]);
//        echo"<br>";
//     }
//     echo"*************** <br>";
// }
// $arr=[1,2,3];
// foreach ($arr as $key => $value) {
//     // print($key);   // index
//     // print($value); // value of array

//     # code...
// }
// foreach ($arr as $shimaa ) {
   
//     print($shimaa); // value of array
// }

// $arr=[[1,2],[25,30]];

// foreach ($arr as $value) {
//     # code...
//     // print_r($value);  // array => [1,2],[25,30]
//     foreach ($value as $newValue) {
//         # code...
//         print($newValue); // 1,2,25,30
//         echo"<br>";
//     }

// }

/////////////////////////// associative array  "key"=>value
//========== key

// $users=["ayaat",24,"eman",26,"yousef",22];
// $users=["name"=>"ayaat","age"=>24];
// print($users["name"]);
// echo "<br>";
// print($users["age"]);
$users=[
    ["name"=>"ayaat","age"=>24],
    ["name"=>"eman","age"=>26],
    ["name"=>"yousef","age"=>22]
];
// // print($users[2]["name"]);
// // print($users[1]["age"]);

// foreach ($users as  $arrayValue) {
//     # code...
//     foreach ($arrayValue as $key => $value) {
//         # code...
//         echo "$key : $value <br>";
//     }
// }
/////////////////////   task 
// echo "<table border='1px'>";
//     echo "<thead>";
//         echo "<tr>";
//         echo "<td>";
//         echo"name";
//         echo "</td>";
//         echo "<td>";
//         echo"age";
//         echo "</td>";
//         echo "</tr>";
//     echo "</thead>";

//     echo"<tbody>";

//     foreach ($users as  $arrayValue) {
//         # code...
//         echo"<tr>";
//         // namee    age
//         foreach ($arrayValue as $key => $value) {
//             # code...
//             // [ayaat 24]
//             // echo "$key : $value <br>";
//             echo "<td>";
//             echo"$value";
//             echo "</td>";
        
//         }
//         echo"</tr>";
//     }
//     echo"</tbody>";

// echo"</table>";

// $numbers=[15,30,0,105,150];

?>