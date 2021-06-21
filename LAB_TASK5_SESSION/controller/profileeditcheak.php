<?php
 
 session_start();
 if(isset($_POST['edit']))
 {
    $name=$_SESSION['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $select= "select * from users where name='$name'";
    $res= $row['name'];
    if($res === $name)
    {
   
       $update = "update users set name='$name',email='$email',gender='$gender', dateofbirth='$dateofbirth', where name='$name'";
       
if($name==$res)
       { 
           
           header('location:lgdashboard.php');
       }
       else
       {
           
           header('location:editprofile.php');
       }
    }
    else
    {
        
        header('location:editprofile.php');
    }
 }
?>