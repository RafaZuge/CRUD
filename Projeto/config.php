<?php

    define('HOST','localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new MySQLi(HOST,USER,PASS,BASE);

    // Devemos ter esse arquivo em todos os demais para fazer a conecção