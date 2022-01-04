<?php
       $user="root";
       $password="";
   
    try {
       $db = new PDO('mysql:host=localhost;dbname=chezdiallo',$user,$password);
   } catch(PDOException $e){
    echo $e->getMessage();
    }
?>