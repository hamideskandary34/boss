<?php 
session_start();
if (isset($_SESSION['D'])){
session_destroy ();

}
header ("location: login.php")


?>