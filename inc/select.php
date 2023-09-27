<?php

$sql = 'SELECT * FROM kkl ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql );
$kkl = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>