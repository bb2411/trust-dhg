<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TITHI</title>
</head>
<body>

    <form action="edittithi.php" method="post">
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
    <input type="submit">
    </form>
</body>
</html>