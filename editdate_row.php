<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW DATA</title>
</head>
<body>
    <form action="editeddate.php" method="post">
        <label for="id">ID :</label>
        <?php echo '<input type="number" name="broucher_no" value="' . $_POST['id'] . '" readonly>'; ?>
        
        <label for="datefor">Date For <span style="color: red;">*</span></label>
        <input type="text" id="datefor" name="datefor" required>

        <label for="party">Party <span style="color: red;">*</span></label>
        <input type="text" id="party" name="party" required>

        <label for="hastak">Hastak</label>
        <input type="text" id="hastak" name="hastak">

        <label for="address1">Address 1</label>
        <input type="text" id="address1" name="address1">

        <label for="address2">Address 2</label>
        <input type="text" id="address2" name="address2">

        <label for="address3">Address 3</label>
        <input type="text" id="address3" name="address3">

        <label for="city">City</label>
        <input type="text" id="city" name="city">

        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount">

        <label for="tithitype">Tithi Type</label>
        <input type="text" id="tithitype" name="tithitype">

        <label for="mobileno">Mobile No</label>
        <input type="text" id="mobileno" name="mobileno">
        <button type="submit">Submit</button>
    </form>
</body>
</html>