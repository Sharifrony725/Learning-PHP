<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning php</title>
</head>
<body>
<form action="index.php" method="POST">
Please enter your grade:
<p><input type="text" name="marks"></p>
<input type="submit" value="submit">
</form>
    <?php

$marks = $_POST['marks'];
if ($marks>= 80) {
    echo "A+";
} elseif ($marks>= 70) {
    echo "A";
}
 elseif ($marks>= 60) {
    echo "A-";
} 
 elseif ($marks>= 50) {
    echo "B";
} 
 elseif ($marks>= 40) {
    echo "C";
} 
 elseif ($marks>= 33) {
    echo "D";
} 

else {
   echo "Failed";
}

//     //Even/Odd
//     $num = 5;
//     if ($num%2==0) {
//       echo "the numer is even.";
//     }else{
//         echo "the number is odd";
//     }
//     echo "<hr>";
//     $num = 6;
//     if ($num%2==0) {
//       echo "the numer is even.";
//     }else{
//         echo "the number is odd";
//     }
// echo "<br>";
// echo "<hr>";
// $num = 0;
// if ($num>0) {
//     echo "the number is positive";
// } elseif ($num<0) {
//     echo "the number is negative";
// } else {
//     echo "the number is zero";
// }
// echo "<hr>";
// $num = 6;
// if ($num>0) {
//     echo "the number is positive";
// } elseif ($num<0) {
//     echo "the number is negative";
// } else {
//     echo "the number is zero";
// }
//letter grade
/*$marks = ("enrter your number: ");
if ($marks>= 80) {
    echo "A+";
} elseif ($marks>= 70) {
    echo "A";
}
 elseif ($marks>= 60) {
    echo "A-";
} 
 elseif ($marks>= 50) {
    echo "B";
} 
 elseif ($marks>= 40) {
    echo "C";
} 
 elseif ($marks>= 33) {
    echo "D";
} 

else {
   echo "Failed";
}*/
    //for loop
    // $start = 1;
    // for ($start=1; $start<=10 ; $start++) { 
    // echo  '2x' .  $start. ' = ' . 2*$start . '<br>';  
    // }
  //switch
//   $a = "learn";
//   switch ($a ) {
//       case 'learn':
//         echo "successfully learn";
//           break;
//       case 'hunter':
//         echo "successfully hunter";
//           break;
//           case 'subcribtion':
//             echo "successfully subcribtion";
//               break;
//       default:
//          echo "Final destination";
//           break;
//   }
//while
// while ($start <=10  )

//do while 
// $start = 1;
// do {
//     echo  '2x' .  $start. ' = ' . 2*$start . '<br>';
//     $start++;
// } while ($start<= 10);










//Operator.

// echo $a++;
// echo "<br>";
// echo $a;
// echo "<br>";
// $b = 5;
// echo $b--;
// echo "<br>";
// echo $b;
// define("NAME","Rony");
// echo constant("NAME");
// echo NAME;
// define("AMOUNT",20);
// echo"<br>";
// echo AMOUNT;







   /* $name ="true";
    $roll = 10;
// $test = print ("hello"); //1
// echo "<br>";
// echo $tes

$myName  = " ";
$name  = "rony"; //string
$roll = 10; //number
$new = (double)$roll;
var_dump($new);


$decimal = 10.5; //float
$bool = true;
var_dump($decimal);//flot
//  //=
// ==//
// ===//
$int=(int) $decimal;
$decimal = (int)$decimal;

var_dump($decimal);//int



$bool = false;  
echo $bool; //

*/

   ?>
</body>
</html>