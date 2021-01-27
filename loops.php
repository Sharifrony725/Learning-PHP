<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Example</title>
</head>
<body>
<?php
/*  
1
1 1
1  1 1  
1  1 1 1
*/
for ($i=1; $i <=4; $i++)
 { 
 for ($j=1; $j <=$i ; $j++)
  { 
    echo "1 ";
 }echo " <br>";
}
echo "<hr>";
/*  
1
1 2
1  2 3  
1  2 3 4
*/
for ($i=1; $i <=4; $i++)
 { 
 for ($j=1; $j <=$i ; $j++)
  { 
    echo  $j." ";
 }echo " <br>";
}
echo "<hr>";
/*  
1
2 2
3  3 3  
4  4 4 4
*/
for ($i=1; $i <=4; $i++)
 { 
 for ($j=1; $j <=$i ; $j++)
  { 
    echo  $i." ";
 }echo " <br>";
}
echo "<hr>";
/*
1 2 3 4 
1 2 3 
1 2
1
*/
for ($i=4; $i>=1 ; $i--) { 
    for ($j=1; $j<=$i ; $j++) { 
        echo $j ." ";
    }echo  "<br>";
}
echo"<hr>";


// 1
// 22
// 333
// 4444
for ($i=1; $i <=4 ; $i++) { 
    for ($j=0; $j <=$i ; $j++) { 
        echo $i." ";
    }echo "<br>";
}














/*
//21-01-2021
//1+2+3+4+5+6+7+8+9+10+.....+100
$sum = 0;
for ($i=1;  $i<=100 ; $i++) { 
   $sum = $sum +$i;
}echo $sum;
echo"<hr>";
//1+3+5+7+9+11+13+15+17+19+21+23+25+27+29+.....+99
$sum = 0;
for ($i=1; $i <=100 ; $i+=2) { 
   $sum = $sum +$i;
}echo $sum;
echo"<hr>";
//2+4+6+8+10+12+14+...+100
$sum = 0;
for ($i=2; $i <=100 ; $i+=2) { 
    // echo $i."<br>" ;
$sum = $sum+$i;
}echo $sum;
echo "<hr>";
//1+3+5+7+9+11+13+15+17+19+21+23+25+27+29+.....+total 100 odd numbers
$count = 0;
$sum= 0;
for ($i=1;  ; $i+=2) { 
    $count++;
    $sum = $sum+$i;
    if ($count==100) {
        break;
    }
}echo $sum;
echo "<hr>";
// echo  $count;
//1+4+8+13+19+26;
$t = 1;
$a = -1;
$sum= 0;
for ($i=1; $i <=6 ; $i++) {
 $t++;    
$a = $a + $t;
$sum = $sum + $a;
}
echo  $sum;
*/

//Loop practice

//1)1+2+3+4+5+6+7+8+9+10;
// for ($i=1; $i<=10 ; $i++) 
// { 
// echo $i ." ";
// }

// echo "<hr>";

// for ($i=10; $i>=1; $i--) 
// { 
// echo $i ." ";
// }

// echo "<hr>";
// $sum = 0;
// for ($i=1; $i <=10 ; $i++) { 
//     $sum =$sum+$i;
// }
// echo $sum;

// echo"<hr>";
//02)1+3+5+7+9
// $sum = 0;
// for ($i=2; $i<=10; $i+=2)
//  { 
//      $sum = $sum + $i;
// }
// echo $sum;
// echo "<hr>";
// $sum = 0;
// for ($i=2; $i<=10  ; $i+=2)
//  { 
// $sum = $sum + $i;
// }
// echo $sum;

exit;











// 01)1+2+3+4+..............+100;
// $sum =0;
// for ($i=2; $i <=20 ; $i+2) { ki 
//     // $sum = $i*$i;


// echo $sum;//Ans =5050;



// echo"<hr>";
// //02)1+3+5+7+9+11+13+15+......+99
// $sum = 0;
// for ($i=1; $i <=100 ; $i++) { 
//     if ($i%2!=0) {
//         $sum = $sum + $i;
//     }
// }echo $sum;//Ans =2500
// echo"<hr>";
//03)First 100 odd numbers  summation.
// $count = 0;
// $sum = 0;
// for ($i=1;  ; $i++) { 
//     if ( $i%2 !==0) {
//         $sum = $sum +$i;
//         $count++;
//         if ($count==100) {
//             break;
//         }
//     }
// }echo $sum;//Ans = 10000.
// echo"<hr>";
//Peramid
/*
1 
 1 1 
 1 1 1 
1 1 1 1
 */





















//Nested Loop
/*
for ($i=1; $i<=10 ; $i++) {
    for ($j=1; $j<=5 ; $j++) { 
        echo $i . "-";
        echo $j ."- ";
        echo "Bangladesh";
        echo "<br>";
    }
}
*/
// for ($i=1; $i <=30 ; $i++) { 
//     if ($i>10) {
//         echo $i . " : ";
//         for ($j=0; $j<=5 ; $j++) { 
//             echo $j. " ";
//         } echo "<br>";
//     }
//     else{
//         echo "There is no loop under  value of " .$i ."<br>";
//     }
// }
//Break and Continue
//foreach 
// $num =  array(12, 34, 22, 8, 10);
// foreach($num as $ch )
// echo $ch." ";
// echo "<br><br>";
// foreach($num as $key => $value){
//     echo $key." :  ".$value. "<br>"; 
// }
// echo "<br><br>";
// $aa = array("Company name" => "Coder House BD", "Location" => "Dhaka",  "Postal Code " => "5964");
// foreach($aa as $key => $value){
//     echo $key. " : " .$value. "<br>"; 
// }

//Odd/Even number  
// for ($coder=1; $coder<= 10 ; $coder++) { 
//     if ($coder%2 ==0) {
//         echo  $coder . " is Even <br>";
//     }elseif($coder%2 !==0){
//         echo  $coder . " is Odd <br>";

//     }
// }

//
// for ($i=1; $i <=10 ; $i++) { 
//     if ($i==10) {
//         echo $i . " . ";
//     }else{
//         echo $i . " , ";
//     }
// }
// for ($i=1; $i <=10 ; $i++) { 
//     echo "the number is : $i <br>";
// }
// $i = 1;

//     echo "<br>";
//     $i++;   
// }
// $num1 = 60;
// $num2 = 40;
// $num3 = 30;

// if($num1 > $num2 && $num1 > $num3){
//   echo "num1 is largest";
// }else if($num2 >  $num3){
//   echo "num2 is largest";
// }else{
//   echo "num3 is largest";
// }
//04)1+4+8+13+19+26
// $t = 1;
// $a = -1;
// $sum = 0;
// for ($i=1; $i <=6 ; $i++) { 
//     $t++;
//     $a = $a +$t;
//     $sum = $sum + $a;
// }echo $sum;
//Prime Number(1-100)
// $count = 0;
// for ($i=1;  ; $i++){ 
//     if ($count==25) 
//     break;
//     if ($i%2==0)
//     continue;
//     else{
//         if ($i==1){
//             //$sum=$sum+1;
//              $count++;
//              echo $i ." ";
//         } 
//         else{
//             $not = 0;
//             for ($j=2; $j<$i ; $j++) { 
//                 if ($i%$j==0) {
//                     $not = 1;
//                     break;
//                 }
//             }
//             if ($not==0) {
//                 $count++;
//                 echo $i." ";
//             }
//         }



//     } 
// }

?>
  
</body>
</html>