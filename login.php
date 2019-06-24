<?php 
if (isset ($_POST['email'])){
    require('config.php');
    $email =$_POST['email'];
    $pass = $_POST['pass'];
    $query ="SELECT* from `users`WHERE `email`='$email'";
    $result = mysqli_query ($connect,$query);
    if ($result ->num_row == 1){
        $user = mysqli_fetch_assoc($result);
        if (password_verify($pass , $user['password']);
        session_start();
        $_SESSION['D']= $user ['email'];
        header ("location:panel.php");
    }else {
        $error = "ramze ooboor eshtebahe";
    }

    }else {
        $error = "email nist";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <?php 
    if (isset ($error)){
        echo $error;
    }
    ?>
    <label for="email">email</label>
    <input type="email" name="email"id="email">
    <label for="pass">password</label>
    <input type="password"name="pass"id="post">
    <input type="submit">register </button>
    
    </form>
</body>
</html>