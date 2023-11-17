<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessBoard</title>
</head>
<body>
    <h1>My ChessBoard </h1>
    <table style="border-width:1px; border-style: solid; border-color:black;">
<?php
for($row=1;$row<=8;$row++){
    echo"<tr>";
    for($col=1;$col<=8;$col++){
        $total=$row+$col;
        if($total%2==0){
            echo "<td style='background-color:white; padding:25px'></td>";
        }else{
            echo "<td style='background-color:black; padding:25px'></td>";
        }
    }
    echo "</tr>";
}
?>
    </table>
    
</body>
</html>