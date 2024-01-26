<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH DATE</title>
</head>
<body>
    <form action="editdate.php" method="post">
        <label for="date">DATE :</label>
        <input type="text" id="dateinput" name="dateinput" pattern="^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])$" placeholder="dd-mm" required>
        <input type="submit">
    </form>
</body>
</html>