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

        echo "Изображение успешно загружена.";

    ?>