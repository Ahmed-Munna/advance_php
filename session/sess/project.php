<?php
session_start();

if(isset($_SESSION["name"]) && isset($_SESSION["password"])){
    header ("location: admin.php");
}

define("NAME","Munna");
define("PASSWORD","12345678");



    // $name = $password = "";
    // $err_name = $err_password = "";
    // $emp_name = $emp_password = "";
    
    // if(isset($_POST["submit"])){

    //     if(empty($_POST["name"])){
    //         $emp_name = 'empty name';
    //     }else{
    //         if(htmlspecialchars(preg_match("/^[a-z-' ]+$/i",$_POST["name"]))){
    //             if($_POST("name") == NAME){
    //                 header("admin.php");
    //             }else{
    //                 $nMP = 'Your password not match';
    //             }
               
    //         }else{
    //             $err_name = 'Unvalid Carrecter';
    //         }
            
    //     }
    //     if(empty($_POST["password"])){
    //         $emp_password = 'empty password';
    //     }else{
    //         if(htmlspecialchars(preg_match("/^[a-z-0-9' ]+$/i",$_POST["password"])) && strlen($_POST["password"]) >= 8){
    //             if($_POST("password") == PASSWORD){
    //                 $password = val($_POST["password"]);
    //             }
    //         }else{
    //             echo 'Unvalid password';
    //         }
            
    //     }
        
    // }

        if(isset($_POST["submit"])){

            if($_POST["name"] == NAME){
                if($_POST["password"] == PASSWORD){
                    $name = $_SESSION["name"];
                    $password = $_SESSION["password"];
                    header("location: admin.php");
                }else{
                    echo "password problem ";
                }
            }else{
                echo 'unvalid information';
            }
        }


    function val($data){
        htmlspecialchars($data);
        trim($data);
        stripslashes($data);
        return $data;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION LOGIN VALIDATION</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Type your name"><br>
        <input type="password" name="password" placeholder="type your password"><br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>