<?php

    // $file = fopen("index2.html","w") ;

    // fwrite($file,"My name is munna");

    // fclose($file);

    // $file = fopen("index2.html","r");

    // echo fread($file,filesize("index2.html"));

    // fclose($file);

    // $file = fopen("index2.html","r+");

    // echo fread($file,filesize("index2.html"));
    // echo fwrite($file,"I Love My Bangladesh");

    // fclose($file);

    // unlink("index2.html");



    // $file = fopen("index1.html","w");

    // echo fwrite($file, "Hello Bangladesh");

    // fclose($file);

    // $file = fopen("index1.html","r");

    // echo fread($file,filesize("index1.html"));

    // fclose($file);

    $file = fopen("index1.html","r+");

    echo fread($file,filesize("index1.html"));

    echo fwrite($file,"This is Pandamic situation");

    fclose($file);


    // unlink("index.html")































?>