<?php 


try 
{
    $connection = new PDO('mysql:host=localhost;dbname=chainDB','root','');
    echo 'Database connected successfully';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}




?>