<link rel="stylesheet" href="classless.css">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TITHI</title>
</head>
<?php  
include "db.php";
$broucher_no = $_POST['broucher_no'];
$party = $_POST['party'];
$hastak = $_POST['hastak'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$city = $_POST['city'];
$amount = $_POST['amount'];
$tithitype = $_POST['tithitype'];
$mobileno = $_POST['mobileno'];
$month=$_POST['month'];
$period=$_POST['period'];
$day=$_POST['day'];
$datefor= $month."-".$period."-".$day;
$sql = "INSERT INTO tithifor (broucher_no, datefor, party, hastak, address1, address2, address3, city, amount, tithitype, mobileno)
        VALUES ('$broucher_no', '$datefor', '$party', '$hastak', '$address1', '$address2', '$address3', '$city', '$amount', '$tithitype', '$mobileno')";
$sql3 = "INSERT INTO tithi (broucher_no, datefor, party, hastak, address1, address2, address3, city, amount, tithitype, mobile_no,whichflag)
VALUES ('$broucher_no', '$datefor', '$party', '$hastak', '$address1', '$address2', '$address3', '$city', '$amount', '$tithitype', '$mobileno','0')";
if($conn->query($sql) === TRUE){
    $conn->query($sql3);
    echo "<h1>data entered</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}else{
    echo "<h1>data Not Entered Try again</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}
// Close connection
$conn->close();

?>