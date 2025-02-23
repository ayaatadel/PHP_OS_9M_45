<?php

/**
 * 
 * OOP==> object
 * class==>
 * Acces==> public , privates , protected  
 * 
 * 
 * principles of OOP
 * inheritance 
 * polymorphism  ===> override==>  accepted in php , overloading==> not acepted in php 
 * Abstraction
 * Encapsulation===> seeter , getter
 */

use Random\Engine as RandomEngine;

// class Human
// {
//     public  $name;
//     public  $age;
//     public  $address;
//     private $password;
//     const DB_Name="Os";
//     static $count=0;


//     function __construct($name = "userName", $age = "userAge", $address = "userAddress")
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         self::$count++;
//     }

//     function setPassword($password)
//     {
//         $this->password = $password;
//     }
//     function getPassword()
//     {
//         return $this->password;
//     }
//     function print()
//     {
//         echo $this->name, $this->age, $this->address;
//     }

//     static function fuctionStatic() // deal with variable  that related to class
//     {
//        echo self::DB_Name , "", self::$count;
//     }
// }


// $h=new Human(name:"iti",address:"Shebin");
// // $h=new Human();
// // $h=new Human();
// // $h=new Human();
// // $h=new Human();
// // // print_r( $h);
// // // echo Human::$count;
// // // $h->print();

// // /**
// //  * Inheritance
// //  * multible in heritance  ==> xxxxxxxxx
// //  * multi level in heritance =>>>>> yes
// //  * single in heritance   ==> yes
// //  * hicharchal in heritance   ==> yes
// //  * hypried in heritance  ==> xxxxxxxxx
// //  */
// // // $h->name;


// // //** single inheritance */

// class Person extends Human
// {
//     public $email;

//     function __construct($name = "personName", $age = "personAge", $address = "personAddress", $email = "personEmail")
//     {
//         parent::__construct($name, $age, $address);
//         /**
//          *  $this->name=$name;
//          * $this->age=$age;
//          * $this->address=$address;
//          */
//         $this->email = $email;
//     }

//     function print()
//     {
//         parent::print();
//         echo "$this->email";
//     }

//     function test()
//     {
//         echo "welcom from first child";
//     }

//     function printCount()
//     {
//         echo static::$count;
//     }
// }




// $p=new person();
// $p->printCount();
// // $p->email;
// // $p->$password="1234";
// // print($p->$password);
// // print_r();

// /** multi level inheritance */
// class Chlid extends Person
// {
 

  
// }

// $ch=new Chlid();
// print_r($ch);
// $ch->test();


/*** Abstract Class & Interface */

// abstract class Animal{

//    abstract function abtrsctMethod():void;
//    abstract function stringMethod():string;

// }

// abstract class  cat extends Animal{
// //     function abtrsctMethod():void{
// //   echo "test";
// //     }
// //     function stringMethod():string{
// //   return "text";
// //     }
// }


// interface Text {
//     function print():void;
//     function sayHello();
// }
// interface Text3{
//     function print():void;
//     function sayHello();
// }

// interface text2 extends Text , Text3{
//    function x();
// }

// class Word implements text2,Text3{
//     function print():void{

//     }
//     function sayHello(){

//     }
//     function x(){

//     }
// }


/** Compostion الاعتماديه*/
// Class Engine{
//   function print ()
//   {
//     echo "Engine Start";
//   }
// }



// class Car{
//     public $type;
//     public $engine;
//  function __construct(Engine $engine,$type="tyota")
//  {
//     $this->type=$type;
//     $this->engine=$engine;
//  }

//  function printCar ()
//  {
//    $this->engine->print();
//  }
// }
// $e=new Engine();
// $c=new Car($e);
// $c->printCar();


