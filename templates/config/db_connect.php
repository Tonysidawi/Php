<?php
//  CONNECT TO DATABASE
$conn = mysqli_connect('localhost', 'william', 'test123', 'ninja_pizza');


// CHECK CONNECTION
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
} 

?>