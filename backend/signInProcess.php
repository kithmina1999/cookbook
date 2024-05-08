<?php 

$useremail = $_POST["email"];
$password = $_POST["password"];

if(empty($useremail) || empty($password)){
    echo("Please fill the empty feilds");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Please enter a valid email address");
}else if(strlen($useremail)>100){
    echo("Email address has too many characters email length should be less than 100");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo("Please enter a valid password");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `user_email`='".$useremail."' AND `password` = '".$password."' ");
    $n = $rs->num_rows;
    if($n == 1){
        echo("Success");
        $d=$rs->fetch_assoc();
        $_SESSION["u"]= $d;
    }else{
        echo("Invalid email or password");
    }
}


?>