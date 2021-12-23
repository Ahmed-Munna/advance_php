<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE UPLOAD</title>
</head>
<body>
    

    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="upfile">
        <input type="submit" name="submit">

    </form>


    <?php
    
        // if(isset($_POST["submit"])){
        //     $Fname = $_FILES["upfile"]["name"];
        //     $Ftype = 'upload/'.$_FILES["upfile"]["type"];
        //     $F_temp_name = $_FILES["upfile"]["tmp_name"];
        //     $Ferror = $_FILES["upfile"]["error"];
        //     $Fsize = $_FILES["upfile"]["size"];

        //     move_uploaded_file($F_temp_name,$Fname);

        // }
    



            // if(isset($_POST["submit"])){

            //    $file_name = "upload/".$_FILES["upfile"]["name"];
            //    $file_type ="upload/".$_FILES["upfile"]["type"];
            //    $tem_file_name = $_FILES["upfile"]["tmp_name"];
            //    $file_error = $_FILES["upfile"]["error"];
            //    $file_size = $_FILES["upfile"]["size"];

            //    move_uploaded_file($tem_file_name,$file_name);


            // }


            // if(isset($_POST["submit"])){

            //     $file_name = 'upload'.date("d_m_Y_h_i_s").$_FILES["upfile"]["name"];
            //     $tem_file_name = $_FILES["upfile"]["tmp_name"];
            //     $file_size = $_FILES["upfile"]["size"];



            //     $file_name_path = pathinfo($file_name,PATHINFO_EXTENSION);

            //     if($file_size <= 16799999999){

            //         if($file_name_path === "jpg"||$file_name_path === "png"){
            //             move_uploaded_file($tem_file_name,$file_name);
            //         }else{
            //             echo 'not valid file....!';
            //         }
            //     }else{
            //         echo 'YOUR FILE SIZE VERY HEIGH';
            //     }
            // }



            // if(isset($_POST["submit"])){

            //     $tem_file_name = $_FILES["upfile"]["tmp_name"];
            //     $file_size = $_FILES["upfile"]["size"];
            //     $file_name = 'upload/'.date("d_m_Y_h_i_s").$_FILES["upfile"]["name"];

            //     $ext = pathinfo($file_name,PATHINFO_EXTENSION) ;

            //     if($file_size <= 500000){

            //         if($ext === "png" || $ext === "jpg"){
            //             move_uploaded_file($tem_file_name,$file_name);
            //         }else{
            //             echo 'UNVALIDE FILE';
            //         }
            //     }else{
            //         echo 'YOUR FILE SIZE LEARG';
            //     }
            // }


            if(isset($_POST["submit"])){

                $file_name = 'upload/'.date("m_d_Y_h_i_s").$_FILES["upfile"]["name"];
                $file_tem_name = $_FILES["upfile"]["tmp_name"];
                $file_size = $_FILES["upfile"]["size"];

                $ext = pathinfo($file_name,PATHINFO_EXTENSION);

                if($file_size <= 1000000){

                    if($ext === 'jpg' || $ext === 'png'){

                        move_uploaded_file($file_tem_name,$file_name);
                    }else{
                        echo 'YOUR FILE UNVALID';
                    }
                }else{

                    echo 'YOUR FILE SIZE VERY LEAGE';
                }
            }





    ?>





</body>
</html>