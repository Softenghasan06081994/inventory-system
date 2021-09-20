<?php 

$db_details = "root";
$db_name = "new_data";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_details);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$connection = mysqli_connect("localhost", "root","","new_data");
if(mysqli_connect_errno())
{
    echo 'failed to connect'.mysqli_connect_error();
}
?>
