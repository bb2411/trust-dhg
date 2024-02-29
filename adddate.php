<link rel="stylesheet" href="classless.css">
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
$sql = "INSERT INTO datefor (broucher_no, datefor, party, hastak, address1, address2, address3, city, amount, tithitype, mobileno)
        VALUES ('$broucher_no', '$datefor', '$party', '$hastak', '$address1', '$address2', '$address3', '$city', '$amount', '$tithitype', '$mobileno')";

$sql2 = "INSERT INTO datedata (broucher_no, datefor, party, hastak, address1, address2, address3, city, amount, tithitype, mobileno,whichflag)
        VALUES ('$broucher_no', '$datefor', '$party', '$hastak', '$address1', '$address2', '$address3', '$city', '$amount', '$tithitype', '$mobileno','0')";
if($conn->query($sql) === TRUE){
    $conn->query($sql2);
    echo "<h1>data entered</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}else{
    echo "<h1>data Not Entered Try again</h1><br><a href='index.php'>GO TO HOMEPAGE</a>";
}
// Close connection
$conn->close();
?>
