<?php
include('config.php');
$name = $_POST['name'];
$address = $_POST['address'];
$insertQuery = "Insert into user set name = $name address= $address";

