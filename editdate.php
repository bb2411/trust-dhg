<link rel="stylesheet" href="https://classless.de/classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT ID TO UPDATE</title>
</head>
<?php
include "db.php"; 
$date=$_POST['dateinput'];
$sql="select * from datedata where datefor='$date'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table><tr><td>ID</td><td>DATE</td><td>NAME</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td><td>".$row['datefor']."</td><td>".$row['name']."</td></tr>";
    }
    echo "</table><br><a href='index.php'><li>GO TO HOME PAGE</li></a>";
    echo "<form action='editdate_row.php' method='POST'><label for='name'>ENTER ID YOU WANT TO</label><input type='number' name='id'></form>";
}else{
    echo "<h1>NO RECORD FOUND</h1>";
}
?>