<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading and File handling</title>
</head>

<body>
<?php 
if(isset($_POST['form1'])){
    try{}
    catch{}
}

?>
<form action="" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Upload your file</td>
              <td><input type="file" name=""></td>   
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="upload" name="form1"></td>
        </tr>
    </table>
    </form>

</body>
</html>
