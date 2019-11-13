<?php
     $arrInfo=$_FILES['Filedata'];

    $tmpName=$arrInfo['tmp_name'];

    $realName=$arrInfo['name'];

    $ext=explode(".",$realName)[1];


    $baseName=md5(uniqid()).".$ext";

    $baseDir=Date("Y/m/d",time());
    
    if (!is_dir($baseDir)){
        mkdir($baseDir,0,777);
    }
    $filePath=$baseDir."/".$baseName;
    //var_dump($filePath);die;
    move_uploaded_file($tmpName,$filePath);
    echo $filePath;

    


?>