<?php
session_start();
include 'helpers.php';

$title = 'title';
$errors = [];

$mainContent = include_template('register.php', ['errors' => $errors]);

echo include_template('layout.php', ['title' => 'СКФО', 'content' => $mainContent]);
