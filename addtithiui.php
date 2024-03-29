<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TITHI</title>
</head>
<body>
    <h1>ADD TITHI RECORD</h1>
    <form action="addtithi.php" method="post">
        
    <label for="broucher_no">Broucher No <span style="color: red;">*</span></label>
        <input type="text" id="broucher_no" name="broucher_no" required>

        <label for="month">Month:</label>
    <select id="month" name="month" required>
        <?php
        $months = array(
            "કાર્તિક",
            "માર્ગશિર",
            "પુષ્ય",
            "માઘ",
            "ફાગણ",
            "ચૈત્ર",
            "વૈશાખ",
            "જેઠ",
            "આષાઢ",
            "શ્રાવણ",
            "ભાદરવો",
            "આશ્વયુજ"
        );
        foreach ($months as $month) {
            echo "<option value='$month'>$month</option>";
        }
        ?>
    </select><br>
    <label for="choice">Choose:</label>
    <select id="choice" name="period" required>
        <option value="સુધ (Sudh)">સુધ (Sudh)</option>
        <option value="વધ (Vadh)">વધ (Vadh)</option>
    </select><br>
    <label for="day">Enter a Day (1-15) :
    <input type="text" id="day" name="day" pattern="[1-9]|1[0-5]" title="Day" required></label>
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