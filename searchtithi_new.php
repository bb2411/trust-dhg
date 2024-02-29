<link rel="stylesheet" href="https://classless.de/classless.css">
<head>
<link rel="stylesheet" href="classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH TITHI IN NEW RECORD</title>
</head>
<?php  
include "db.php";
$month=$_POST['month'];
$period=$_POST['period'];
$day=$_POST['day'];
$date= $month."-".$period."-".$day;
$sql="select * from tithifor where datefor='$date'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table><tr><th>ID</th><th>DATE</th><th>NAME</th><td>HASTAK</th><th>TITHI TYPE</th><th>Mobile No</th></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['broucher_no']."</td><td>".$row['datefor']."</td><td>".$row['party']."</td><td>".$row['hastak']."</td><td>".$row['tithitype']."</td><td>".$row['mobileno']."</td></tr>";
    }
    echo "</table><br><a href='index.php'><li>GO TO HOME PAGE</li></a>";
}else{
    echo "<h1>NO RECORD FOUND</h1><a href='index.php'><li>GO TO HOME PAGE</li></a>";
}
?>