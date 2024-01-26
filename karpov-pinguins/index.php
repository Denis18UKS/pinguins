    <?php      
        include "connect.php"; // выражение include включает и выполняет указанный файл 

        $query_get_category = "select * from categories"; 

        $categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); //получение результата запроса из переменной query_get_category 
        //и преобразуем его в двумерный массив, где каждый элемент это массив с построчным получением кортежей из таблицы результата запроса 

        $news = mysqli_query($con, "select * from news");

    ?> 

    <!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Пингвины</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/pinguins.css'> 

    </head> 
    <body> 

    <nav> 

    <div class="nav-header"> 
        <h2>Разделы</h2> 
        <div class="searcch-block"> 
            <img src="imeges/Search.svg" alt=""> 
        <input type="text" placeholder=" Поиск" class="poisk" > 
        </div> 
            
        <div class="vhod"> 
            <img src="imeges/1.svg" alt=""> 
            <a href="#" >Вход</a> 
        </div> 
    </div> 
    <div class="text-name"> 
        <h1 class="namePost1">Пингвины</h1> 
        <h3>Понедельник, Январь 1, 2018</h3> 
        <a href="createNew.php">Добавить новость</a>
    </div> 

    <main> 
        <div class="text-main"> 
            <?php foreach ($categories as $category){ 
                echo "<li><a href='#'>$category[1]</a></li>"; 
                echo "<hr>"; 
                } 
            ?> 
        </div> 
    </main> 

    <div id="main">
        <div class="last-news">
            <?php
                while($new = mysqli_fetch_assoc($news)){
                    // print_r($new['title']);
                    // echo "<hr>";

                    echo "<div class='card'>";
                    echo "<img src='images/news/" . $new['image'] . "'>";
                    echo "<h2 class = 'c_title'>" . $new['title'] . "</h2>";
                    echo "<p>" . $new['content'] . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>


    </body> 
</html> 