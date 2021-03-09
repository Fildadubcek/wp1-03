<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$two ="2";
$pi ="3,17";
$r = rand(0,100);
    // obsah
    $area = $two * $r * $pi;
    // obvod
    $circuit = $two * $r * $pi;
?>
<p>Poloměr kruhu je <?= $r ?> </p>
<p>Obsah kruhu je <?= $area ?> </p>
<p>Obvod kruhu je <?= $circuit ?> </p>

</body>
</html>