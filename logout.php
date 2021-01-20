<?php 
session_start(); //memulai session
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy(); //menghapus session
header('location:index.php') //redirect ke halaman login
 ?>