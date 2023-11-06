<?php
require 'Assignment.php';
require 'DbConnection.php';

$db = new DbConnection();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $db->throw_query($_POST["name"],$_POST["email"],@$_POST["gender"],$_POST["city"]);
}


