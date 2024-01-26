<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TITHI</title>
</head>
<body>
    <form action="editedtithi.php" method="POST">
        <label for="id">ID :</label>
        <?php echo '<input type="number" name="id" value="' . $_POST['id'] . '" readonly>'; ?>
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
    <label for="name">Name :</label>
    <input type="text" name='name' id="name" placeholder="name" required>
    <input type="submit" placeholder="save data">
    </form>
</body>
</html>