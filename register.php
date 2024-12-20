<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $errors = [];

    if (strlen($username) < 3) {
        $errors[] = "Имя пользователя должно содержать не менее 3 символов.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Введите корректный адрес электронной почты.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать не менее 6 символов.";
    }
    
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    echo "Регистрация успешна!";
}
?>