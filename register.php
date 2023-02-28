<?php
include 'dbconn.php';
include 'helpers.php';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$errors = [];

$mainContent = include_template('register.php');
echo include_template('layout.php', ['title' => 'Регистрация', 'content' => $mainContent]);
