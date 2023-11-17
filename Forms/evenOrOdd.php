<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body style="padding:20px">
<h1>Check if number is Even or Odd</h1>
    <form action="#" method="post">
        <input type="number" name="num" placeholder="enter a number">
        <input type="submit" name="check" value="Check">
    </form>
    <?php
    if(isset($_POST['check'])){
        $num=$_POST['num'];
        if($num%2==0){
            echo "$num is an even number";
        } else{
            echo "$num is an odd number";
        }
    }
    ?>
</body>
</html>