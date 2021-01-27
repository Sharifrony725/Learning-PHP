<?php
$num1 = 30;
$num2 = 50;
$num3 = 80;

if($num1>$num2 && $num1
>$num3){
    echo "Num 1 is Largest ";
}elseif($num2>$num3){
    echo "Num 2 is Largest";
}else{
echo "Num 3 Is Largest";
}

// $grade = 10;
// if (($grade<=100) && ($grade>=90)){
// echo "He has got A+";
// }
// elseif
//     (($grade<90) && ($grade>=80)){
// echo "He has got A";
// }
// elseif
//     (($grade<80) && ($grade>=70)){
// echo "He has got A-";
// }
// elseif
//     (($grade<70) && ($grade>=60)){
// echo "He has got B";
// }
// elseif
//     (($grade<60) && ($grade>=50)){
// echo "He has got C";
// }
// elseif
//     (($grade<50) && ($grade>=40)){
// echo "He has got D";
// }
// elseif
//     (($grade<40) && ($grade>=33)){
// echo "He has got E ";
// }
// elseif
//     (($grade>100) || ($grade<0)){
// echo "Invalid Input";
// }
// else{
//     echo " You have failed";
// }
//Largest Number among 3 Number
// $num1 = 60;
// $num2 = 40;
// $num3 = 30;
// if ($num1>$num2) {
//     if ($num1>$num3){
//         echo "num1 is largest";
//     } else{
//         echo "num3 is largest";

//     }
        
// }else{
//     if ($num2>$num3) {
//          echo "num2 is largest";
//     }else{
//         echo "num3  is largest";
//     }
// }
/*
$bangla = 87;
$english = 78;
$math = 80;
$science =85;
$ict =75;
$islam = 94;
$avg = ($bangla + $english + $math + $science + $ict + $islam)/6;
$grade = ' ';
switch ($avg) {
    case ($avg>=80):
        $grade ='A+';
        break;
        case ($avg>=70):
            $grade ='A';
            break;
            case ($avg>=60):
                $grade ='A-';
                break;
                case ($avg>=50):
                    $grade ='B';
                    break;
                    case ($avg>=40):
                        $grade ='C';
                        break;
                        case ($avg>=33):
                            $grade ='D';
                            break;

    default:
      $grade ='F';
        break;
};
echo "Your average is " . $avg . '<br>';
echo "Your Grade is " . $grade; */
?>