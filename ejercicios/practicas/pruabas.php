<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$var1 = 5;
$var2 = 6;

function test(){
    global $var1, $var2;
     $var1 += $var2;
}
test();
echo "<p>mi variable es $var1</p>";
?>

</body>
</html>