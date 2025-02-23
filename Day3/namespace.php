<?php 



namespace test2;
trait Animal {
    public $text="jahdjh";

    
}
trait Animal2 {
    public $text="jahdjh";

    
}
trait Animal3 {
    public $text="jahdjh";

    
}

namespace Test1;
use  test2\Animal2;
Class Animal{
use Animal2;
    public $classNameSpace="name space";

}
?>