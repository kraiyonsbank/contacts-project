<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


$conn = mysqli_connect($dbhost, $dbhost, $dbuser, $dbpass);
if(!$conn)

{
    die('could not connect:' . mysqli_error($conn));
}
echo 'connected successfully';
mysqli_select_db($conn,'crud');
mysqli_close($conn);

?>