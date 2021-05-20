<?php

require_once 'header.php';
require_once '../connection.php';

$query1 = "select * from training";
$result = mysqli_query($db_con, $query1);

echo "<div class='col-md-12'>";
echo "<h3 class='page-title'>Training Applications</h3>";
echo "<table class='table table-bordered'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Phone</th><th>Email</th> <th>Address</th><th>Country</th><th>Courses</th></<tr>";

while($row = mysqli_fetch_assoc($result))
{
    $dbfname = $row['firstname'];
    $dblname = $row['lastname'];
    $dbphone = $row['phoneno'];
    $dbemail = $row['email'];
    $dbadd = $row['address'];
    $dbcountry = $row['country'];
    $dbcourse = $row['courses'];
    
    echo "<tr><td>$dbfname</td><td>$dblname</td><td>$dbphone</td><td>$dbemail</td><td>$dbadd</td><td>$dbcountry</td><td>$dbcourse</td></tr>";
    
}

echo "</table>";
echo "</div>";

