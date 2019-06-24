<?php 
require('config.php');
if (isset($_POST['fname'])){
    if ($_POST['pass1'] == $_POST['pass2']){

        $fname = $_POST ['fname'];
        $lname = $_POST['lname'];
        $email = $_POST ['email'];
        $pass = password_hash ($_POST['pass1'],1);
        $query = "INSERT INTO `rock`(`fname`,`lname`,`email`,`password`)
        VALUES('$fname','$lname','$email','$pass')";
        $result = mysqli_query($connect , $query);
        if ($result ==1){
        session_start () ;
        $_SESSION ['D']= $email ;
        header ("location:panel.php");
         } else{
             $error = "wrong%#$%%!^";
         }      
    }  
    else {
       $error ="password not match #$4";

   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>we site</title>
</head>
<body>
<form method="post">
<?php if (isset ($error)){
echo $error;
}
?>
<div>
    <label for="fname"> first name</label>
    <input type="text" name="fname" id="fname">
    </div>
    <div>
    <label for="lname">last name</label>
    <input type="text" name="lname" id="lname">
    </div>
    <div>
    <label for="email">EMAIL</label>
    <input type="text" name="email" id="email">
    </div>
    <div>
    <label for="pass1">password</label>
    <input type="password" name="pass1" id="pass1">
    </div>
    <div>
    <label for="pass2" >password too</label>
    <input type="password" name="pass2" id="pass2">
    </div>
    <button>FIRE!</button>
    </form>
</body>
</html>