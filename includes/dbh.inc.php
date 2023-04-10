<?php
$dbservername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname ='team_project';
$conn =mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if(!$conn){
    die("Connection failed");
}