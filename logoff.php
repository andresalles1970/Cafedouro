<?php 

session_start();

unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['role']);

header('location:login.php');
