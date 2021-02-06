<?php 
if(isset($_REQUEST['st_name']) && isset($_REQUEST['st_roll'])){


$new_name = $_REQUEST['st_name'];
$new_roll = $_REQUEST['st_roll'];
echo $new_name;
echo "<br>";
echo $new_roll;
header('location: get.php?message = 1');
}
else{
    echo "Value not found";
    header('location: get.php?message = 0');
}


?>