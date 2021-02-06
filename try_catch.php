<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_POST['form'])){
try{

    if(empty ($_POST['username'])){
        throw new Exception('user name can not be empty ');
    }

    if(empty ($_POST['password'])){
        throw new Exception('password can not be empty ');
    }

}
catch(Exception $e){
$error_message = $e->getMessage();


}
}

?>
<?php 
if (isset($error_message)){
    echo $error_message;
}

?>


    <form action="" method="post" name="">
        <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="form"></td>
        </tr>
        </table>
    
    
    </form>
</body>
</html>