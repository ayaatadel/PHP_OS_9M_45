<?php 


echo "<h1>Day1 php Track Open source </h1>";

// $var1=5;
// // gettype($var);

// /**
//  * echo ==> mult parameter without practices
//  * var_dump  ==> mult parameter  ==> accet array
//  * print ==>single parameter , string
//  * prit_r ==> single parameter ==> accept array
//  */


// //  echo"Day1 php","concepts";
// //  echo"Day1 php","concepts";
// //  print("track open source");
// //  print"track open source","day1";  // error ==> syntax error
// //  print("track open source","day1");

// /**
//  * int
//  * float , double
//  * string
//  * array
//  * object
//  * resource
//  */

// $x=5;
// echo gettype($x)."<br>";
// $y="5";
// // parsing
// /**
//  * settypt
//  * 
//  */
// $x=(string)$x;
// // settype($x,"string");
// echo gettype($x)."<br>";



// $arr=[1,2,3,"php",true,2.5,"open source",[12,18,"test"]];

// // 
// // print_r($arr,$x,"hello");
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump($arr,$x,"test");

#comment ==> single line
//
/** multi line */

/**
 * operators
 * arethamtic operator
 * assignment operator
 * logical operators
 * comparison operators
 * 
 * 
 */
// $x=5;
// $y=10;
// $y="ayaat";
// Arethamtic operator
// echo $x+$y,"<br>";
// echo $x-$y,"<br>";
// echo $x*$y,"<br>";
// echo $x/$y,"<br>";
// echo $x%$y,"<br>";
// echo $x**$y,"<br>";
// echo $x+$y;


// Logical operator
/**
 * &  ==> true & true ==> true
 * || ==> false || false ==> false
 * !  ==> !true ==> false  , !false ==> true
 */

// echo((5>2)&&(3<2));
// var_dump((5>2)&&(3<2));
// print_r((5>2)&&(3<2));
// print((5>2)&&(3>2));


/** assignment operators
 * 
 */
// $var1=5;
// // $var2=$var1;  // equal
// $var2="5";  // 

// var_dump($var1==$var2);
// echo"<br>";
// var_dump($var1===$var2);
// echo"<br>";
// var_dump(gettype($var1)==gettype($var2));
// echo"<br>";

// $var1++;  // 5   ==> 6
// ++$var1;  // 7   
// --$var1;  // 6   
// $var1--;  // 6   , 5


/**
 * >
 * <
 * >=
 * !=
 * <>
 */

//  var_dump(5>2);
//  var_dump(5<2);
//  var_dump(5<>2); // not equal
//  var_dump(5<=2);
//  var_dump(5>=2);
//  var_dump(5!=2);


// $x=5;
// $z=$x;
// $z=&$x;
// // $z=15;
// $x=12;
// var_dump($x);
// echo "<br>";
// var_dump($z);


$arr=[1,2,3];
// echo $arr[0];

/**
 * loop 
 * for ==> length
 * while==>   may be
 * do while  ==>condition 
 * 
 */

//  for ($i=0; $i <5 ; $i++) { 
//     # code...
//     // echo "$arr[$i]<br>";
//     // echo '$arr[$i]<br>';
//     // echo $arr[$i],'<br>';
//  }
// $i=0;
//  while($i<3)
//  {
//     echo $arr[$i],'<br>';
//     $i++;
//  }
// $x=5;
// $x="text";
// echo $x;
// $a=0;
// do {
//     # code...
   
//     echo $arr[$a],"<br>";
//     $a++;
// } while ($a <3);

/**
 * for(;;)
 */


 /*
  * condition
  * if  if else if elseif else
  * switch
  * ternary operator 
  */


//   $x=5;
// //   $y=10;
// //   if($x>$y)
// //   {
// //     echo"x greater than y ,<br>"; 

// //   }else{
// //     echo"y greater than x ,<br>"; 

// //   }
//   if ($x>5) {
//     echo"x greater than 5 ,<br>"; 
//   } else if($x<5) {
//     echo"x less than 5 ,<br>"; 
//   }else{
//     echo"x qeual 5 ,<br>"; 
//   }
// $x="cs";
//   switch ($x) {
//     case $x:
//         echo"x qeual 5 ,<br>"; 
//         break;
//     case 6:
//         echo"x qeual 6,<br>"; 
//     default:
//     echo"check your value ,<br>"; 
//         break;
//   }


//   (5>4)? print("5"): print("4 ");
//   echo (5>4)? ("5"): ("4 ");

// $_POST
// $_GET
// sesssion
// cookies


// if($x>5)
// {
//     $x++;
// }

// function
$x=5;
function z(){
// #
// global $x;
$x=12;
++$x;
echo $x , "<br>";
};

z();
echo $x;


?>


