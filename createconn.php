<?php

$conn = new mysqli("localhost","","","jugnoo_api");
if ( mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}

?>