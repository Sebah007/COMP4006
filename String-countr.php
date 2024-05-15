<!DOCTYPE html>
<html>
<head>
    <title>String Length Counter</title>
</head>
<body>
    <h2>String Length Counter</h2>
    <form method="post" action="">
        <input type="text" name="text" placeholder="Enter text" required><br><br>
        <input type="submit" name="count" value="Calculate Length">
    </form>

    <?php
    if(isset($_POST['count'])) {
        $text = $_POST['text'];
        echo "String length is: " . strlen($text);
    }
    ?>
</body>
</html>
