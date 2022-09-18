<?php
$connection=mysqli_connect ("localhost", 'root', '','location');
if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}
