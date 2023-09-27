<?php
$conn = mysqli_connect('localhost', 'root', 'root' ,'gg');

if(!$conn){ 
    echo 'Error: '. mysqli_connect_error();
}
?> 