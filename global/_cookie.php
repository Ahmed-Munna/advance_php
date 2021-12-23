<?php

    // $cookie_name = "user";
    // $cokie_value = "Ahmed";

    // setcookie($cookie_name,$cokie_value,time()+(86400*2),"/");


    $cookie_name = "user";
    $cookie_value = "Munna";

    setcookie($cookie_name,$cookie_value,time()+(86400),"/");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    
<?php

    // if(isset($_COOKIE[$cookie_name])){

    //     echo 'The cookie value is: ',$_COOKIE[$cookie_name];
    // }else{
    //     echo 'Cokie is not set..!';
    // }

    if(isset($_COOKIE[$cookie_name])){

        echo 'Cookie file name is: ',$_COOKIE[$cookie_name];
    }else{
        echo 'This cookie not founded';
    }

?>





</body>
</html>