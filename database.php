<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=vks35';
    $username = 'vks35';
    $password = 'gMHcf42Jf';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
