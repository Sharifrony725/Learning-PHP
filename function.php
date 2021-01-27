<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    function test(){
        echo "Welcome to Bangladesh <br >";
    }
    test();
    echo"<hr>";
    function sum($a,$b){
        $c = $a + $b;
        echo "Sum is : $c <br>";
    }
    sum(4,7);
    sum(3,6);
    echo "<hr>";
    function suma($a=2, $b=3)
    {
        $c = $a + $b;
        echo "Sum is : $c <br>";
    } 
    suma(2,4);
    suma();
    suma(56);
    
    
    
    
    
    
    
    ?>
</body>
</html>