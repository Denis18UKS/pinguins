    <?php
    $Title = $_POST['Title'];
    $newsText = $_POST['text'];
    $Category = $_POST['category'];

    $errors = [];

    if (empty($Title) || empty($newsText) || empty($Category)) {
        $errors[] = "Ошибка: Заполните все поля.";
    }

    if (strlen($Title) > 20) {
        $errors[] = "Ошибка: Название новости не должно превышать 20 символов.";
    }

    if (!is_string($Title)) {
        $errors[] = "Ошибка: Название новости должно быть строкой.";
    }

    if (!is_string($newsText)) {
        $errors[] = "Ошибка: Текст новости должен быть строкой.";
    }

    if (!is_string($Category)) {
        $errors[] = "Ошибка: Категория новости должна быть строкой.";
    }

    $newsImg = $_FILES['image'];

        if (empty($newsImg)) {
            $errors[] = "Ошибка: Загрузите изображение.";
        } else {
            $destination = "images/" . $newsImg['name'];
            $filename = $newsImg["tmp_name"];

            // Проверяем тип файла
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            $fileType = $newsImg['type'];

            if (!in_array($fileType, $allowedTypes)) {
                $errors[] = "Неподдерживаемый тип файла. Пожалуйста, загрузите изображение в формате JPEG или PNG.";
            }

            $check_upload = move_uploaded_file($filename, $destination);

            if (!$check_upload) {
                $errors[] = "Ошибка: Вы не загрузили изображение";
            }
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            exit;
        }

        echo "<script>alert('Изображение успешно загружена.'); window.location.href='/'</script>";


        require "connect.php";

// // Шаг 1: Создание переменной с запросом
// $query = "INSERT INTO News (category_id, image, Title, content) VALUES ('new5.png', 'Hello', 'BoBos')";

// // Шаг 2: Выполнение запроса
// $result = mysqli_query($con, $query);

// // Шаг 3: Проверка добавления записи
// if ($result) {
//     echo "Запись успешно добавлена в таблицу БД.";
// } else {
//     echo "Произошла ошибка при добавлении записи в таблицу БД.";
// }


        $category = $_POST['category'];
        $category_id = 0; // Set a default value

        if ($category === 'technology') {
            $category_id = 1;
        } elseif ($category === 'fashion') {
            $category_id = 2;
        } elseif ($category === 'sports') {
            $category_id = 3;
        } elseif ($category === 'food') {
            $category_id = 4;
        }

        $img = $_FILES['image']['name'];
        $title = $_POST['Title'];
        $content = $_POST['text'];


        $query = "INSERT INTO News (category_id, image, Title, content) VALUES (1, '$img', '$title', '$content')";
        // var_dump($query);
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<br>";
            echo "<script>alert('Запись успешно добавлена в таблицу БД'); window.location.href='/'</script>.";
            
        } else {
            echo "Произошла ошибка при добавлении записи в таблицу БД.";
        }
    ?>