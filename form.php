<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation using  preg match</title>
    <style>
    .error{
        color: red;
    }
    
    </style>
</head>
<body>
<?php 

if(isset($_POST['form1'])){
// $u_name = $_POST['name'];
// $u_email = $_POST['email'];
// $u_pass = $_POST['password'];
// $u_usrname = $_POST['usrname'];

// if(empty($u_name)){
//     echo  " <div class = 'error'>  Name can not be empty </div>";
// }
// echo "<br>";
if(empty($_POST['u_email'])){
    echo  "<div class = 'error'> Email can not be empty </div>";
}
    $u_email = $_POST['email'];
    $c1 = substr_count($u_email , "@");
    $c2 = substr_count($u_email , ".");
    if($c1 !=1 || $c2 != 1)
     {
        echo "Invalid email : @ count or  . count failed ";
    }else{
        $len = strlen($u_email);
    }
}

// echo "<br>";
// if(empty($u_usrname)){
//     echo  " <div class = 'error'> User Name can not be empty </div>";
// }

// echo "<br>";
// if(empty($u_pass)){
//     echo  " <div class = 'error'> Password can not be empty </div>";
// }
// echo "<br>";


// }
?>












    <form action="" method="POST">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
                <tr>
                    <td>User Name :</td>
                    <td><input type="text" name="usrname"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="send" name="form1"></td>
                </tr>

        </table>
    </form>
</body>
</html>