<?php
    session_start();
    if (isset ($_SESSION['D'])){
        echo $_SESSION['D'];
        echo "<a href='logout.php'>logout </a>";


    }else {
        header ("location:login.php");
    }
    ?>