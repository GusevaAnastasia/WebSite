<?php 

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); 
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); ?>