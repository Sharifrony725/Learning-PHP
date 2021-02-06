<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get,Post And Requst Methods</title>
</head>
<body>
<?php
if( isset($_REQUEST['message']))
{
    $msg = $_REQUEST['message'];
    if($msg == 1 ){
        echo "success";
    }else{
        echo "Error";  
      }
    

}



?>
    <form action="result.php" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="st_name"></td>
            </tr>
            <tr>
                <td>Roll:</td>
                <td><input type="text" name="st_roll"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" value="submit"></td>
            </tr>
        </table>
        </form>
</body>
</html>