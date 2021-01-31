<?php 
// Function
function Sum(){
    $a = 20;
    $b = 30;
    $c = $a + $b;
    echo "Sum is : $c  ";
}
Sum();
echo "<hr>";
//Function Arguments
function add ($a, $b ){
$c = $a +$b;
echo "Sum is : $c";
}
add( 10, 5);
echo "<hr>";
// Default argument value
function Addition ($a =2  , $b = 3 )
{
$c = $a + $b;
echo "Sum is $c  <br>";
}
Addition(5 ,10);
Addition (5,);
echo "<hr>";
//returning  value
function sumation( $a , $b = 3)
{
    $c = $a + $b;
    return $c;
} function multi($a , $b =5)
{
$c = $a  * $b;
return $c;
}
echo multi(5 , 3 ) - sumation(5 , 3);
echo "<hr>";
// php array function
function test_now($a1 , $b2)
{
    $a3 = $a1 + $b2;
    $a4 = $a1 - $b2;
        $final = array($a3 , $a4);
        return $final;

}
$result = test_now(20 ,10);
echo "Addition is : ". $result[0];
echo  "<br>";
echo "Subtracrion is : ". $result[1];
?>