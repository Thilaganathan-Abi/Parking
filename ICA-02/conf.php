<?php
define('HOST','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD', '');
define('DBNAME', 'parking');
$connection = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
?>