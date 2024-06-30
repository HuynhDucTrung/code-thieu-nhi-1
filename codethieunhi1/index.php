<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number1 = "123456789123456789123456789";
    $number2 = "987654321987654321987654321";
    $sum = bcadd($number1, $number2);
    echo "Tổng của $number1 và $number2 là $sum" . "<br>";
    $difference = bcsub($number1, $number2);
    echo "Hiệu của $number1 và $number2 là $difference";
    ?>
</body>

</html>