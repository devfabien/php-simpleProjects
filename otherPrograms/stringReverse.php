<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String reverse</title>
</head>
<body style="padding:20px">
<h1>Reverse a string</h1>
    <form action="#" method="post">
        <input type="text" name="word" placeholder="enter a word">
        <input type="submit" name="reverse" value="Reverse">
    </form>
    <?php
    if(isset($_POST['reverse'])){
        $word=$_POST['word'];
        echo "<p style='font-size:28px;font-weight:semi-bold'>"; echo strrev($word); echo "</p>";
    }
    ?>
</body>
</html>