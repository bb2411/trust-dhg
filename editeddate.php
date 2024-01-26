<link rel="stylesheet" href="https://classless.de/classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated date</title>
</head>
<?php 
include "db.php";
$id=$_POST['id'];
$name=$_POST['nameinput'];
$date=$_POST['dateinput'];
$sql="update datedata set name='$name',datefor='$date' where id=$id;";
$state=$conn->query($sql);
if($state){
    echo "<h1>data UPDATED</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}else{
    echo "<h1>data Not UPDATED Try again</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}
?>