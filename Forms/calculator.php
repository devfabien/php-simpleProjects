<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body style="padding:30px;text-align:center;">
<h1 style="text-align:center">Calculator</h1>
    <form action="#" method="post" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
        <input type="number" name="num1" placeholder="enter the first number" style="padding:3px; margin:6px"><br>
        <select name="oper" style="margin-left:6px; padding:3px;">
            <option>--Choose an Operator--</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select><br><br>
        <input type="number" name="num2" placeholder="enter the second number" style="margin-left:6px; padding:3px;"><br>
        <input type="submit" value="Calculate" name="calculate">
    </form>
    <?php
    if(isset($_POST['calculate'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $oper=$_POST['oper'];
        switch($oper){
            case'+':echo "<p style='font-size:40px'> $num1 + $num2 = "; echo $num1+$num2; echo "</p>";
            break;
            case'-':echo "<p style='font-size:40px'> $num1 - $num2 = "; echo $num1-$num2; echo "</p>";
            break;
            case'/':echo "<p style='font-size:40px'> $num1 / $num2 = "; echo $num1/$num2; echo "</p>";
            break;
            case'*':echo "<p style='font-size:40px'> $num1 * $num2 = "; echo $num1*$num2; echo "</p>";
            break;
            default;
            echo "<p style='font-size:40px; color:red'>Invalid operation</p>";
        }
    }
    ?>
</body>
</html>