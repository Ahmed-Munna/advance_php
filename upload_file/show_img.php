<?php
    if(isset($_POST["submit"])){
        $file_name = 'upload/'.date("Y-d-m-h-i-s").$_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        if(!empty($_FILES["file"]["name"])){
            move_uploaded_file($tmp_name,$file_name);
        }else{
            echo 'file not founded';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <input type="submit" name="submit">
    </form>

    <img src="<?=$file_name?>" alt="">





</body>
</html>