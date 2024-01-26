    <?php
    // Подключение к базе данных
        include "connect.php";
    ?>


<!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Админ</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/admin.css'> 
    </head> 
    <body> 

    
    <h1>Админ-Панель</h1>
    <hr>

    <?php
            // Проверка соединения
        if (!$con) {
            die("Ошибка подключения: " . mysqli_connect_error()); //mysqli_connect_error() - используется для описания последней ошибки при попытке подключения к БД
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

            //mysqli_fetch_assoc() — используется для извлечения результата запроса из результата выполнения предыдущего SQL-запроса, 
            //который возвращает ассоциативный массив

                echo "<li>" . $row["title"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Новости не найдены.";
        }

        // Закрытие соединения с базой данных
        mysqli_close($con);
    ?>

    </body> 
</html> 