<?php
$con = new mysqli('localhost',
    'root',
    '1234',
    'customer_crud');
if ($con){
    echo 'connected!';
}else {
    die(mysqli_error($con));
}

?>