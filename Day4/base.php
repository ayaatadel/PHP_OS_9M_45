<?php 
if (file_exists("file.txt")) {
    $file = fopen("file.txt", "a+"); 
    $myFileSize = filesize("file.txt");
    if ($myFileSize > 0) {
       
        echo fread($file, $myFileSize);
    } else {
       
        fwrite($file, "ITI");
        @fclose($file);
        //  @fflush($file);
        // @fseek($file, 1);
        $file = fopen("file.txt", "a+");
        echo @fread($file, filesize("file.txt"));
    }
  fclose($file);
 

} else{
    file_put_contents("file.txt",""); // create file if file not exist 
    // + content ==> ""
  }