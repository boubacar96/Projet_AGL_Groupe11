<?php 
session_start();

if(isset($_SESSION['identifiant']))
{
session_destroy();

header('location:auth');

}


 ?> 