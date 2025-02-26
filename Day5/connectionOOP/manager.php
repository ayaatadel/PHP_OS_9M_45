<?php 
require('index.php');
if(isset($_POST['btn-delete']))
{
    $id=$_POST['id'];
    $result=$database->delete('users',$id);
    if($result)
    {
        header('location:allUsers.php?message=userDelteed Successfully');
        exit;
    }else{
        {
            header('location:allUsers.php?message=user not Deleted ');
            exit;
        }
    }
}


?>