<?php
require_once 'connection.php';
if(isset($_POST["firstname"]))
{
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $phone = $_POST["phoneno"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $courses = $_POST["courses"];
    
    
   
    $query = "select email from training_application where email = '$email'";
    $result = mysqli_query($db_con, $query);
    
   if($fname =="" || $lname == "" || $phoneno ="" || $email =="" || $address == ""|| $country == "" )
   {
       header("location:trainingform.php?fname=$fname&&lname=$lname&&phone=$phone&&email=1&&address=$address&&country=$country");
   }
   elseif($courses == "" )
   {
       header("location:trainingform.php?fname=$fname&&lname=$lname&&phone=$phone&&email=3&&address=$address&&country=$country");
   }
   else if(mysqli_num_rows($result)> 0)
   {
         header("location:trainingform.php?fname=$fname&&lname=$lname&&phone=$phone&&email=2&&address=$address&&country=$country");
   }
   
   else
   {
        
$query = "insert into training (id,firstname,lastname,phoneno,email,address,country,courses)"
            . " values('','".mysqli_real_escape_string($db_con,$fname)."','".mysqli_real_escape_string($db_con,$lname)."',"
            . "'".mysqli_real_escape_string($db_con,$phone)."','".mysqli_real_escape_string($db_con,$email)."',"
            . "'".mysqli_real_escape_string($db_con,$address)."','$country'"
            . ",'$courses[0] $courses[1] $courses[2] $courses[3] $courses[4] $courses[5] $courses[6] ')";
        mysqli_query($db_con,$query);
        
        header("location:trainingform.php?success=1");
   }
    
}
?>