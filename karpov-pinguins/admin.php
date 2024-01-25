<?php
// Подключение к базе данных
$con = mysqli_connect("localhost", "root", "", "pinguins_news");

// Проверка соединения
if (!$con) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// SQL-запрос для выборки новостей
$query = "SELECT title FROM news";

// Выполнение запроса
$result = mysqli_query($con, $query);

// Проверка наличия результатов
if (mysqli_num_rows($result) > 0) {
    // Вывод названий новостей списком
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["title"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Новости не найдены.";
}

// Закрытие соединения с базой данных
mysqli_close($con);
?>