<link rel="stylesheet" href="https://classless.de/classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TITHI</title>
</head>
<?php 
include "db.php";
$name=$_POST['nameinput'];
$date=$_POST['dateinput'];
$sql="INSERT INTO datedata (name, datefor) VALUES ('$name','$date');";
$state=$conn->query($sql);
if($state){
    echo "<h1>data entered</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}else{
    echo "<h1>data Not Entered Try again</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}
?>