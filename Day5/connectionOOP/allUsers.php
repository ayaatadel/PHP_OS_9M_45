<?php  
require('index.php');
include("../base.php");
$allUsersData=$database->index("users");
// var_dump($allUsersData);

/*** Display All users Data */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<table>
    <thead>
        <td>Id</td>
        <td>name</td>
        <td>Email</td>
        <td>Action</td>
    </thead>

    <tbody>
     <?php 
     if($allUsersData)
     {
        foreach ($allUsersData as  $user) {
            # code...
            echo "<tr>";
            echo "<td>";
            echo $user['id'];
            echo "</td>";
            echo "<td>";
            echo $user['name'];
            echo "</td>";
            echo "<td>";
            echo $user['email'];
            echo "</td>";
            echo "<td>";
            echo "<div class='flex m-3'>";
            echo "
            <a href='userData.php?id=".$user['id']."'>
            <button class='btn btn-warning' >Show </button>
             </a>
             ";
            echo "
            <a href='userData.php?id=".$user['id']."'>
            <button  class='btn btn-info'>Edit</button>
             </a>
             ";
            echo "
           <form method='post' action='./manager.php'>
           <input type='hidden' name='id' value=".$user['id'].">
           <button type='submit' class='btn btn-danger' name='btn-delete'>Delete </buttton>
    
           </form>
             ";
        
            echo "</div>";
            echo "</td>";
    
    
            echo "</tr>";
         }
     }else{
        echo "<p class='alert alert-danger'>No users </p>";
     }
     
     
     
     ?> 
    </tbody>
</table>


</body>
</html>