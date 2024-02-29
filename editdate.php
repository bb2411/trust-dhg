<link rel="stylesheet" href="classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT ID TO UPDATE</title>
</head>
<?php
include "db.php"; 
$date=$_POST['dateinput'];
$sql="select * from datefor where datefor='$date'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table><tr><td>ID</td><td>DATE</td><td>NAME</td><td>HASTAK</td><td>TITHI TYPE</td><td>Mobile No</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['broucher_no']."</td><td>".$row['datefor']."</td><td>".$row['party']."</td><td>".$row['hastak']."</td><td>".$row['tithitype']."</td><td>".$row['mobileno']."</td></tr>";
    }
    echo "</table><br><a href='index.php'><li>GO TO HOME PAGE</li></a>";
    echo "<form action='editdate_row.php' method='POST'><label for='name'>ENTER Broucher_no YOU WANT TO</label><input type='number' name='id'><button type='submit'>submit </button></form>";
}else{
    echo "<h1>NO RECORD FOUND</h1>";
}
?>