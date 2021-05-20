<?php
require_once 'connection.php';
require 'workmailfunction.php';

if(isset($_POST["firstname"]))
{
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $phone = $_POST["phoneno"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $aboutself = $_POST["about"];
    
    
    //echo $fname."". $lname."". $phone ."".$email."". $address ."".$country ."".$about;
    
    $query = "select email from work where email = '$email'";
    $result = mysqli_query($db_con, $query);
    
    if($fname =="" || $lname == "" || $phoneno ="" || $email =="" || $address == ""|| $country == "" || $about ="" )
   {
       header("location:applyforwork.php?fname=$fname&&lname=$lname&&phone=$phone&&email=1&&address=$address&&country=$country&&about=$about");
   }
   else if(mysqli_num_rows($result)> 0)
   {
         header("location:applyforwork.php?fname=$fname&&lname=$lname&&phone=$phone&&email=2&&address=$address&&country=$country&&about=$about");
   }
   
    else
   {
        
    $query = "insert into work (id,firstname,lastname,phone,email,address,country,about) "
            . "values('','".mysqli_real_escape_string($db_con,$fname)."','".mysqli_real_escape_string($db_con,$lname)."',"
            . "'".mysqli_real_escape_string($db_con,$phone)."','".mysqli_real_escape_string($db_con,$email)."',"
            . "'".mysqli_real_escape_string($db_con,$address)."','".mysqli_real_escape_string($db_con,$country)."',"
            . "'".mysqli_real_escape_string($db_con,$aboutself)."')";
           
    
             mysqli_query($db_con,$query);
             mailfunction($fname,$email);
             header("location:applyforwork.php?success=1");
    }
}
?>

