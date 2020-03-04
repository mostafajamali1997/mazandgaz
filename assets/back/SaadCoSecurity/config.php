<?php
$host     = "localhost"; // Database Host
$user     = "saadco_prsecurityUser"; // Database Username
$password = "oxk8ywe0B"; // Database's user Password
$database = "saadco_prsecurity"; // Database Name
$prefix   = "sec_"; // Database Prefix for the script tables

$connect = mysqli_connect($host, $user, $password, $database);

// Checking Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect with MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($connect, "utf8");

$client = "No";

$site_url             = "http://saadco.co";
$projectsecurity_path = "http://saadco.co/SaadCoSecurity";
?>