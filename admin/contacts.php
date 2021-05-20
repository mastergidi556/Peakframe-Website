<?php
require_once 'header.php';
require_once '../connection.php';

$query1 = "select * from contact";
$result = mysqli_query($db_con, $query1);

echo "<div class='col-md-12'>";
echo "<h3 class='page-title'>Contacts</h3>";
echo "<table class='table table-bordered'>";
echo "<tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></<tr>";

while($row = mysqli_fetch_assoc($result))
{
    $dbname = $row['name'];
    $dbemail = $row['email'];
    $dbsub = $row['subject'];
    $dbmes = $row['message'];
    
    echo "<tr><td>$dbname</td><td>$dbemail</td><td>$dbsub</td><td>$dbmes</td></tr>";
    
}

echo "</table>";
echo "</div>";