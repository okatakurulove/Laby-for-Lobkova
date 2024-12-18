<?php
session_start();
require 'db.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Добро пожаловать в админ-панель</h1>

    <form method="POST">
        <input type="text" name="data" placeholder="Введите данные">
        <button type="submit">Отправить</button>
    </form>

    <h2>Данные из БД:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Данные</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['data']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Нет данных</td></tr>";
        }
        ?>
    </table>
    
    <a href="logout.php">Выйти</a>
</body>
</html>

<?php
$conn->close();
?>
