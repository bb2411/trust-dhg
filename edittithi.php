<link rel="stylesheet" href="classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TITHI</title>
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
    echo "<table><tr><td>ID</td><td>DATE</td><td>NAME</td><td>HASTAK</td><td>TITHI TYPE</td><td>Mobile No</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['broucher_no']."</td><td>".$row['datefor']."</td><td>".$row['party']."</td><td>".$row['hastak']."</td><td>".$row['tithitype']."</td><td>".$row['mobileno']."</td></tr>";
    }
    echo "</table><br><a href='index.php'><li>GO TO HOME PAGE</li></a>";
    echo "<form action='edittithidata_row.php' method='POST'><label for='name'>ENTER ID YOU WANT TO</label><input type='number' name='id' required><input type='submit'></form>";
}else{
    echo "<h1>NO RECORD FOUND</h1>";
}
?>