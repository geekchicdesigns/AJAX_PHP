<?php
// creates connection
$conn = mysqli_connect('localhost', 'root', 'CHarli123!@#', 'ajaxtest');

$query = 'SELECT * FROM users';

// get results
$result = mysqli_query($conn, $query);

// fetch data
$users = mysql_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

?>