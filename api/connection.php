<?php

    define('host','localhost');
    define('username','root');
    define('password','');
    define('db_name','gudang');


    $koneksi = new mysqli(host,username,password,db_name) or die (mysqli_errno());


?>