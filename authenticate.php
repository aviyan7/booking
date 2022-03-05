<?php 
if(isset($login))
{
    if($id=="" || $pass=="")
    {
        $error = "<h3 style='color:red'> Fill all details </h3>";
    }
    else{
       $sql = mysqli_query($con,"select * from admin where username='$id' && password='$pass' ");
       if(mysqli_query($sql))
       {
           $_SESSION['admin_logged_in']=$id;
           $_SERVER('location:dashboard1.php');
           echo "I";
       }
       else
       {
           $error= "<h3 style='color:red'> Invalid Login Details</h3>";
       }
        }
    }
    ?>