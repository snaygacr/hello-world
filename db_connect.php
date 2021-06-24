<?php
    $conn = mysqli_connect('localhost','root','','ds');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?>