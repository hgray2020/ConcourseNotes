<?php
$connection = mysqli_connect('localhost', 'root', 'b-E9GQ4z_8-xK7wJ');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'ConcourseNotes');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
} 

?>
