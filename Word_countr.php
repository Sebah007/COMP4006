<!DOCTYPE html>
<html>
<head>
    <title>Word Counter</title>
</head>
<body>
    <h2>Word Counter</h2>
    <form method="post" action="">
        <textarea name="text" rows="4" cols="50" placeholder="Enter text" required></textarea><br><br>
        <input type="submit" name="count" value="Count Words">
    </form>

    <?php
    if(isset($_POST['count'])) {
        $text = $_POST['text'];
        $wordCount = str_word_count($text);
        echo "Word count is: " . $wordCount;
    }
    ?>
</body>
</html>
