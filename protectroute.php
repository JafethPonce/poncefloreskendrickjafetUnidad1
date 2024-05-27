<?php

session_start();

if( empty( $_SESSION['id']) ){

    return header("location:login.php");

}