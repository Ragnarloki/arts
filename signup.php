<?php
include('database.php');

$user=$_POST['signinuser'];
$password=$_POST['signinpassword'];

$sql="SELECT * FROM signup";


$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    if($row=mysqli_fetch_assoc($result)){
     
    if($row['username']===$user && $row['password']===$password){
        include("inndex.html");
    }
    else{
        echo('<br>'.'usernotfound');
    }
    


    };
}
else{
    echo("connection error");
}

mysqli_close($conn);

?>