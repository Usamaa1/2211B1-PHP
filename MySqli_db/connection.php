<?php 


    // $dbname = '2211B1';
    // $host = 'localhost';
    // $user = 'usama';
    // $pass = '123';


    // // if($connection)
    // // {
    // //     echo 'Database Successfully connected';
    // // }
    // // else
    // // {
    // //     echo 'Database connection failed';
    // // }


    // try
    // {
    //     $connection = mysqli_connect($host,$user,$pass,$dbname);
    //     // $connection = mysqli_connect('localhost','usama','123','2211B1');
    //     echo 'Database Successfully connected';

    // }
    // catch(mysqli_sql_exception $e)
    // {
    //     // echo 'Database connection failed';
    //     echo $e->getMessage();
    // }





    $dbname = 'dummy';
    $host = 'localhost';
    $user = 'root';
    $pass = '';

     try{
        $connection = mysqli_connect($host,$user,$pass,$dbname);
         echo "Database connected successfully";
     }
     catch(mysqli_sql_exception $err)
     {
         // echo "Database connection failed";
         echo $err->getMessage();
     }




?>
