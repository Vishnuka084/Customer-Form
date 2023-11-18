<?php
$con = new mysqli('localhost',
    'root',
    '1234');
if ($con){
    echo  'connected!';
}else {
    die(mysqli_error($con));
}

?>