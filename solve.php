<?php
//1. Write a program to display the first 10 natural numbers.
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<hr>";

echo"<br><br><br><br>";
for ($i=1; $i<=4 ; $i++) 
{ 
    for ($j=1; $j<=$i ; $j++) { 
        echo $i.$j;
    }echo "<br>";
}


//3. Write a program to display the pattern like right angle triangle using an asterisk
for ($i = 1; $i <= 4; $i++) {
    // first loop starting area
    // $i = 5
    for ($j = 1; $j <= $i; $j++) {// nester loop or inner loop
        // 2nd loop starting area
        // $j = 1
        echo "*  ";
        //2nd loop ending area
    }
    echo " <br>";
    // first loop ending area
}

echo $i; // 5
echo  '<br>';
echo $j; // 5
// output explanation
// rony-test
//rony-test rony-test
//rony-test rony-test rony-test
//rony-test  rony-test rony-test rony-test
//rony-test  rony-test rony-test rony-test rony-test







echo "<hr    >";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "1 ";
    }
    echo " <br>";
}
echo "<hr>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo  $j . " ";
    }
    echo " <br>";
}
echo "<hr>";

/*  
1
2 2
3  3 3  
4  4 4 4
*/
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo  $i . " ";
    }
    echo " <br>";
}
echo "<hr>";
/* 
1
1  4
1  4  9
1  4  9  16

1 
2 4 
3 6 9
4 8 12 16
*/
$a = 10;
if($a = 12){
    echo "You are Wrong";
}else{
echo " You are right";
}
echo $a;

echo"<br>";
for ($i=1; $i <= 4; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo $j*$i ." ";
    }
    echo"<br>";
}


// echo "<br><br><br><br>";
// for ($i=1; $i<=4 ; $i++) 
// { 
//     for ($j=1; $j<=$i ; $j++) { 
//         echo $j*$j." ";
//     }echo "<br>";
// }
//     1
//    2 3
//    4 5 6
//    7 8 9 10

// for ($i=1; $i<=4; $i++) { 
// for ($j=$j; $j<=$i; $j++) { 
//    echo $j ." ";
// }echo "<br>";
// }
echo "<hr>";
$grade = 110;
if($grade<=100 && $grade>80){
echo "A+";
}elseif($grade<80 && $grade>70){
    echo "A";
}elseif($grade<70 && $grade>60){
    echo "A-";
}elseif($grade<60 && $grade>50){
    echo "B";
}elseif($grade<50 && $grade>40){
    echo "C";
}elseif($grade<40 && $grade>33){
    echo "D";
}elseif($grade<80 && $grade>70){
    echo "A";
}elseif($grade>100 || $grade<0){
    echo "Invalid";
}
else{
    echo "F";
}