<?php

/**
 * file ==> how to deal with file
 */


// get path of file
//  echo __FILE__,"<br>";  // path + file + extension
//  echo dirname(__FILE__,2);
//  echo "<br>";
//  echo __DIR__;
//  echo "<br>";

//  // file name +extension
//  echo basename(__FILE__);
//  echo "<br>";


//  // file name 
// //  echo basename(__FILE__,'.php');
//  echo basename(__FILE__,'.txt'),"<br>";

// //
// print_r(pathinfo(__FILE__));
//  echo "<br>";
// print_r(pathinfo(__FILE__,PATHINFO_DIRNAME));
//  echo "<br>";
// print_r(pathinfo(__FILE__,PATHINFO_BASENAME));
//  echo "<br>";
// print_r(pathinfo(__FILE__,PATHINFO_FILENAME));
//  echo "<br>";
// print_r(pathinfo(__FILE__,PATHINFO_EXTENSION));
//  echo "<br>";


// // create directory
// $myDir=dirname(__FILE__,1);
// // echo $myDir,"<br>";
// // @mkdir("$myDir/images") or die("Folder Already exist");  // handle error ==> @
// // mkdir("$myDir/images") ;  // handle error ==> @

// // echo @$x;


// /// create file
// touch("file.txt");

// /**
//  * check folder is exist 
//  */

//  if(is_dir("files"))
//  {
//     echo ("Folder Already exist");

//  }else{
//     mkdir("$myDir/files");
//  }


/**
 * store data in file
 * read data  from file
 * 
 * check file is exist or not
 * file open
 * handle process ==> read , write
 */

// 1- get data from file
//2- write in file

/**
 *  file_put_contents  ==> mode ==>  (write)
 *write ==> remove text exist => write new text , 
 * append ==> save text exist  => write new text
 */
//  file_put_contents("file.txt","Track Open Source");
//  file_put_contents("file.txt","\n Track Open Source\n ",FILE_APPEND);
//  file_put_contents("file.txt","\n Track Open Source\n ",FILE_APPEND|LOCK_EX);
// // read file content
// echo file_get_contents("file.txt");


/** Check access of file */
// if(is_writable("file.txt"))
// {
//      file_put_contents("file.txt","\n Course PHP \n ",FILE_APPEND|LOCK_EX);

// }else{
//     echo "you can't write in this file <br>";
// }

//** remove  file */
// @unlink("file.txt") or die("file not exist");
// touch("file.txt");
// echo file_get_contents("file.txt");



/**
 * put data in file ??
 *  check file is exist or not
 * file open
 * handle process ==> read , write
 *  
 */

/**
 *modes
 * r==> read only, file must exixt
 * w==> write only==> if file not exist ==> create file , content ==> remove exist write new content
 * a==>write only==> if file not exist ==> create file , content ==> save exist contend write new content (append)

 *r+  ==> read and write , content ==> append new content on exist content ==> only file exist
 * w+  ==>==> read and write , content ==> replace new content with exist , if file not exist create file
 * a+ ==> read , write , append , create file if file not exist
 */

if (file_exists("file.txt")) {
    //    echo file_get_contents("file.txt");

    // $file=fopen("file.txt","r");  // resource object
    $file = fopen("file.txt", "w+");  // resource object
    // get size of file
    $myFileSize = filesize("file.txt");
    // echo fread($file,100); // number of bites
    if ($myFileSize > 0) {
        fseek($file, 0);
        echo fread($file, $myFileSize);
    } else {
        // echo "file if empty";
        fwrite($file, "ITI");
        fclose($file);
        fseek($file, 0);
        $file = fopen("file.txt", "r");
        $myFileSize = filesize("file.txt");
        echo fread($file, $myFileSize);
    }
    // echo fgets($file);
    // print all data ==> line by line

    // while(!feof($file))
    // {
    //     // $fileLine=fgets($file);
    //     // echo "$fileLine <br>" ;
    //     $data=fgetcsv($file,"100",":");
    //     print_r($data) ;
    // }

}
