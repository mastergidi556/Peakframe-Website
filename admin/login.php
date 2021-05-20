<?php
session_start();

require_once '../connection.php';
$username = $_POST['uname'];
$password = $_POST['pword'];


$query = "select * from admin where username = '$username' && password = $password";
$result = mysqli_query($db_con, $query);

if($_POST['uname'])
{
    loginUser($username, $password, $result);
}


function loginUser($uname, $pass, $result)
{
    global $result;
    if(empty($uname) || empty($pass))
    {
        echo 'Fields cannot be empty';
    }
    else if(mysqli_num_rows($result) == 0)
    {
        echo 'Wrong username or password'." ". '<a href="index.php" class="primary">click here</a>';
    }
    else 
    {
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['username'] = $uname;
            return header("location:contacts.php");
        }
         
    }
}