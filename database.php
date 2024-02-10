<?php
   $db_server ="localhost";
   $db_user="root";
   $db_pass="";
   $db_name="kali";
   $conn="";



   $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

   if($conn)
   {
    echo"";
   }
   else{
    echo"could not connected" ;
   }