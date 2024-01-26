<link rel="stylesheet" href="https://classless.de/classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TITHI</title>
</head>
<?php  
include "db.php";
$month=$_POST['month'];
$period=$_POST['period'];
$day=$_POST['day'];
$date= $month."-".$period."-".$day;
$sql="select * from tithidata where datefor='$date'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table><tr><td>ID</td><td>DATE</td><td>NAME</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['id']."</td><td>".$row['datefor']."</td><td>".$row['name']."</td></tr>";
    }
    echo "</table><br><a href='index.php'><li>GO TO HOME PAGE</li></a>";
}else{
    echo "<h1>NO RECORD FOUND</h1>";
}
?>