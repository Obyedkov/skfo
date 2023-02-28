<?php
include 'dbconn.php';
include 'helpers.php';

$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$con->set_charset("utf8");

$errors = [];

if (!empty($_POST)) {
    $formArrays = [
        'email',
        'name',
        'password',
    ];

    foreach ($formArrays as $formArray) {
        if ($formArray === 'email') {
            if (filter_var($_POST[$formArray], FILTER_VALIDATE_EMAIL) === false) {
                $errors[$formArray] = "Вы не ввели email";
            }
        }
        if (empty($_POST[$formArray])) {
            $errors[$formArray] = "Поле не заполнено";
        }
    }

    if(empty($errors)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $addRegister = "INSERT INTO `register` ( `name`, `email`, `password`) VALUE ('$name','$email', '$password')";
        if (mysqli_query($con, $addRegister)) {
            echo "выполнено запрос";
        }
    }

}

$mainContent = include_template('register.php', [
    'errors' => $errors,
]);
echo include_template('layout.php', ['title' => 'Регистрация', 'content' => $mainContent]);
