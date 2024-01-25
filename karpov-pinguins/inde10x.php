<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пингвины</title>
</head>
<body>
    <form action="check.php" method="POST" enctype="multipart/form-data">
        <label for="username">Введите имя</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="userage">Введите возраст</label>
        <input type="number" id="userage" name="userage">
        <br>
        <label for="useravatar">Загрузите изображение профиля: </label>
        <input type="file" id="useravatar" name="useravatar">
        <br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>