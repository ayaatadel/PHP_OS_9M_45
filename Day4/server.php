<?php 

// var_dump($_POST);
echo "<br>";
// var_dump($_FILES);
// print_r($_SERVER);
// exit;
if(isset($_POST["btnRegister"]))
{
    echo "<p>Register Successfully </p>";

    /**
     * store in file
     * ==> file.txt
     * 
     * associative array
     * [
     * "name"=>"php",
     * "email"=>"php.com"
     * ]
     * 
     * json ==>  [{ * "name"=>"php",
     * "email"=>"php.com"},{ * "name"=>"php",
     * "email"=>"php.com"}  ]
     */
    var_dump($_REQUEST);
    exit;
     $name=$_POST["name"]; //$_REQUEST["name"]
     $email=$_POST["email"];
     $password=$_POST["password"];
     $image=$_FILES["img"];
    //  print_r($image);
    //  exit;

     if(!is_dir("images"))
     {
        mkdir("images");
     }
/**
 * name.extension  ==>  name ==> timestamp 
 */
// 


 $newImage=time().'.'.pathinfo($image['name'],PATHINFO_EXTENSION); //125.Extension image
 // jpg, png , jpeg
 $validExtensions=["jpeg","jpg","png"];
 $imgExtension=strtolower(explode(".",$image["name"])[1]);//[name,extension] 
//  var_dump($imgExtension);
//  exit;
if(!in_array($imgExtension,$validExtensions))
{
    header("location:register.php?message=choose file Image");
    exit;
}
 //name.extenstion ==> string ==> array==>getExtension
 // 

 //** img >1000 */

 if($image["size"]>10000)
 {
    header("location:register.php?message=image must be 1M");
    exit;

 }
    move_uploaded_file($image["tmp_name"],"images/".$newImage);
     if(!file_exists("data.json"))
     {
         file_put_contents("data.json","[]");
     }else{
        $user=[
            "name"=>$name,
             "email"=>$email,
             "paaaword"=>$password,
             "image"=> $newImage,
        ];
        /***
         * data ==> file ==> string
         * json ==> json object ==> associative array
         * string ==> json array  ==> push data ==> form
         * data ==> form ==> array=====> decode
         */
        $data=file_get_contents("data.json");// json string
        $dbDcoded=json_decode($data,true);// array
         // push data user (form)==> data (file) ==>array
        //  array_push($dbDcoded,$user);
         $dbDcoded[]=$user;
        // var_dump($data);
        // var_dump($dbDcoded); //array
        $newData=json_encode($dbDcoded);
        file_put_contents("data.json",$newData);
        header("login.php");
        exit;
     }
}







if(isset($_POST["btnLogin"]))
{
    echo "<p>Login Successfully </p>";
}



?>