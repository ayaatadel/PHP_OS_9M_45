<?php   

/** 
 * user defined functions ==> function created by user
 * normal functions , anonmous functions , callback functions  recursive functions,
 * predefined functions ==> function already created in php
 * push , pop , shift , unshift , array_keys,merge , array_values
 * sort  , asort, arsort
 * rsort 
 */

 /**  avoid ===> not return value
  * return value
   * has parameters
   * not parametic 
  */

 /** normal functions  */

//  function x()
//  {
//   echo "Function x<br> ";
//  }
//  x();
//  function xY($n1=5,$n2=12)
//  {
//   echo $n1+$n2;
//  }
// //  function xYz($n1=5,$n2=12,$z)
//  function xYz($z,$n1=5,$n2=12)
//  {
//   return " n1: $n1 <br> n2:$n2 <br> z: $z <br>";
//  }
// //  xY(2,4);
// //  xY();
// //  xYz(10,12,10);
//  echo xYz(z:10,n2:15);


/*** anonomous function */
// $sayHello=function($name){
//     echo "hello $name";
// };

// $sayHello("ahmed");

/**callback function  ==> function call another function  */

// function add($a,$b,$callback)
// {
//     $result=$a+$b;
//     $callback($result);
// }

// function displayRsulte($result)
// {
//     echo "$result <br>";
// }

// add(1,2,'displayRsulte')

// recursive function ===> function call itself

// 4  ==> 4 *3*2*1

function factorial($num)
{
    if($num==1)
    {
        return 1;
    }else{
        // 4 ==> 4 * 3*2*1!
        // 5*4*3*2
        return $num * factorial($num-1);
    }
}

echo factorial(4)."<br>";
echo factorial(5)."<br>";

























?>