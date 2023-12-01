<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Right Angled triangle</h1>
    <?php
for($row=1;$row<=10;$row++){
    for($col=1;$col<=$row;$col++){
        echo "<span style=font-weight:bold;padding-left:8px>*<span/>";
    }
    echo "<br/>";
}
?>
</body>
</html>