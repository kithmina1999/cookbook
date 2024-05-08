<?php 

$username = $_POST["username"];
$useremail = $_POST["useremail"];
$userpassword = $_POST["password"];
$cpassword = $_POST["cpassword"];

if(empty($username) || empty($useremail) || empty($password)){
    echo("Please fill the empty feilds");
}else if(strlen($username) > 45) {
    echo("Username must have less than 45 characters.");
}else if(strlen($useremail)>100){
    echo("Email address has too many characters email length should be less than 100");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Please enter a valid email address");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo("invalid password size. Please use a password that have 5 to 20 characters");
}else if($password === $cpassword){

}else{
     
    $rs = Database::search("SELECT * FROM `user` WHERE `user_email` = '".$useremail."' ");
    $rn = $rs->num_rows;
    if($rn > 0 ){
        echo("User with the same Email address already exist.");
    }else{
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO `user`(`user_name`,`user_email`,`password`,`registered_date`) 
        VALUES('".$username."','".$useremail."','".$password."','".$date."') ");
        echo("Success");
    }
}

?>