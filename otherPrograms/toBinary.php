<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Binary</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="num">
        <input type="submit" value="Convert" name="convert">
    </form>
    <?php
    if(isset($_POST['convert'])){
        $num=$_POST['num'];
        echo decbin($num);
    }
    ?>
</body>
</html>