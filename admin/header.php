<?php
session_start();
require_once '../connection.php';

$query1 = "select * from contact";
$result = mysqli_query($db_con, $query1);
$rowcontact = mysqli_num_rows($result);

$query2 = "select * from internship";
$result2 = mysqli_query($db_con, $query2);
$rowintern = mysqli_num_rows($result2);

$query3 = "select * from training";
$result3 = mysqli_query($db_con, $query3);
$rowtrain = mysqli_num_rows($result3);

$query4 = "select * from work";
$result4 = mysqli_query($db_con, $query4);
$rowwork = mysqli_num_rows($result4);

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
        <?php
        if(!empty($_SESSION['username']))
        {
      echo"<li><a href='contacts.php'>Contacts <span class='badge'>$rowcontact</span> </a></li>";
      echo"<li><a href='internship.php'>Internship <span class='badge'>$rowintern</span></a></li>";
      echo"<li><a href='training.php'>Training <span class='badge'>$rowtrain</span></a></li>";
      echo"<li><a href='work.php'>Work <span class='badge'>$rowwork</span></a></li>";
        }
        ?>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
        <?php
        if(!empty($_SESSION['username']))
        {
            echo "<li><a href='logout.php'>Logout</a></li>";
        }
        ?>
    </ul>
  </div>
</nav>