<?php
$i = 1; 
while( $i < 10 ){
echo $i."<br>";
$i++;
}
 echo "<hr>";
// do while loop

$i = 1; 
do {
   echo $i."<br>";
   $i++;
} while ($i < 10);
echo "<hr>";


//foreach loop
$arr = array( 10,20,30,40,45,57,8774,7467,874 );  
$i = 0;
for ($i=0; $i <sizeof($arr); $i++) { 
echo $arr[$i] ."<br>";
}
echo "<hr>";

$found = 6;
$n= 10;
for ($i=1; $i <=$n ; $i++) { 
    echo $i. '<br>';

    if($i === $found){
        //break; // forcefully out
        continue;// The continue wouldn't break the loop, it's just skip all below code in the loop
    }


    echo 'this is test message '. $i. '<br>';
    
}

?>