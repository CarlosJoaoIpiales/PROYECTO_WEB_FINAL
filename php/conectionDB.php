<?php
$con = mysqli_connect("localhost", "admin", "admin", "proyectoweb");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
