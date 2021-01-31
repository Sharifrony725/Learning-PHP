<?php 
$a1 = array(10,20,37,59,90);
echo $a1[3];
echo "<hr>";
//nested array
$a3 = array(10, array("First","Second","Third"), 23, 45.66 ,"phh");
echo $a3[0];
echo "<br>";
echo $a3[1][2];
echo "<hr>";
$a4 = array("first_name" => "  Shariful Islam" , "age" =>22, "id" => 2364 ); 
// echo $a4['first_name'];
// print_r($a4);
echo  "My name is " . $a4["first_name"];
echo "<br>";
echo "age is " . $a4["age"];
echo "<br>";
echo "and id  " . $a4 ['id'];
echo "<hr>";
// array function
$a5 = array(12 , 13, 45.6, "hrklki");
echo count($a5);
echo "<hr>";
echo "Searching an element into an array  ";
echo in_array(45.6 ,$a5);
echo"<hr>";
echo "Maximum Number is ";
$arr = array(100,50,58,98);
echo max($arr);
echo"<br>";
echo "Minimum Number is ";
echo min($arr);
echo"<hr>";
echo "Shorting : ";
sort($arr);
print_r($arr);
echo "<hr>";
echo"Implode: ";
$aa = implode("*" , $arr);
echo $aa;
?>