<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://classless.de/classless.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW DATA</title>
</head>
<body>
    <form action="editeddate.php" method="post">
        <label for="id">ID :</label>
        <?php echo '<input type="number" name="id" value="' . $_POST['id'] . '" readonly>'; ?>
        <label for="date">DATE :</label>
        <input type="text" id="dateinput" name="dateinput" pattern="^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])$" placeholder="dd-mm" required>
        <label for="name">NAME :</label>
        <input type="text" id="nameinput" name="nameinput" required placeholder="NAME">
        <input type="submit">
    </form>
</body>
</html>