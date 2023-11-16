<?php


    define('dbname',"mysql:host=localhost;dbname=2211b1");
    define('user',"usama");
    define('password',"123");



    try{
        // $connection = new PDO("mysql:host=localhost;dbname=2211b1","usama",'123');
        
        $connection = new PDO(dbname,user,password);
        // echo "Database Connected Successfully";
    }
    catch(PDOException $e)
    {
        echo "Database Connection Failed: " . $e->getMessage();
    }




?>