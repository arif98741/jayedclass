<?php
require 'part2/lib/Database.php';
$database = new Database(array(
    'username' => 'root',
    'password' => '',
    'database' => 'isp',
    'host' => 'localhost',

));
$response = $database->select("select * from bills");
echo '<pre>';
print_r($response->fetch_assoc()); exit;