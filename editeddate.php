<link rel="stylesheet" href="classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT date</title>
</head>
<?php 
include "db.php";
$broucher_no = $_POST['broucher_no'];
$datefor = $_POST['datefor'];
$party = $_POST['party'];
$hastak = $_POST['hastak'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$city = $_POST['city'];
$amount = $_POST['amount'];
$tithitype = $_POST['tithitype'];
$mobileno = $_POST['mobileno'];
$sql = "UPDATE datefor SET datefor = '$datefor', party = '$party', hastak = '$hastak', address1 = '$address1', address2 = '$address2', address3 = '$address3', city = '$city', amount = '$amount', tithitype = '$tithitype', mobileno = '$mobileno' WHERE broucher_no = '$broucher_no'";
$sql4 = "UPDATE datedata SET datefor = '$datefor', party = '$party', hastak = '$hastak', address1 = '$address1', address2 = '$address2', address3 = '$address3', city = '$city', amount = '$amount', tithitype = '$tithitype', mobileno = '$mobileno' WHERE broucher_no = '$broucher_no'";
$state=$conn->query($sql);
if($state){
    echo "<h1>data UPDATED</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}else{
    echo "<h1>data Not UPDATED Try again</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}
?>