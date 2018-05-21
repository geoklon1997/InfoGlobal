<?php
session_start();
if(isset($_SESSION['u_username'])){
     
    unlink("log.html");
}
?>