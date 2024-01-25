    <!DOCTYPE html> 
    <html> 
    <head> 
        <meta charset='utf-8'> 
        <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
        <title>Page Title</title> 
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'> 
        <script src='main.js'></script> 
    </head> 
    <body> 
        <header> 
    
            <div class="nav-header"> 
                    <div id="sections">
                        <img src="images/Hamburger menu.png" alt="">
                        <h2>Разделы</h2>   
                    </div>
                    <input type="text" placeholder=" Поиск" class="poisk" > 
                    <div id="vhod"> 
                        <img src="images/Man.png" alt=""> 
                        <a href="#">Вход</a> 
                    </div> 
            </div> 

            <div id="Pinguins-and-date-and-temp">
                <h1 class="namePost1">Пингвины</h1> 
                <div id="date-and-temp">
                    <p>Понедельник, Январь 1, 2018</p>
                    <div id="temp-content">
                        <img src="images/Sun.svg" alt="">
                        <p>- 23 °C</p>
                    </div>
                </div>
            </div>

            <nav id="menu-list-info">
                <ul>
                    <li>Новости</li>
                    <li>Мнение</li>
                    <li>Наука</li>
                    <li>Жизнь</li>
                    <li>Путешествия</li>
                    <li>Деньги</li>
                    <li>Искусство & Дизайн</li>
                    <li>Спорт</li>
                    <li>Люди</li>
                    <li>Здоровье</li>
                    <li>Образование</li>
                </ul>
            </nav>

        </header> 
                
            <form action="/createNewValid.php" method="post" enctype="multipart/form-data">  
                <label for="category">Категории:</label>  
                <select id="category" name="category">  
                    <option value="technology">Технологии</option>  
                    <option value="fashion">Мода</option>  
                    <option value="sports">Спорт</option>  
                    <option value="food">Еда</option>  
                </select>
                <br><br>
                <label for="Title">Заголовок:</label>  
                <input type="text" id="Title" name="Title" class="submit-button-img"><br><br>  
                <label for="text" >Текст:</label><br>  
                <textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>  
                <label for="image">Изображение:</label>  
                <input type="file" id="image" name="image" accept="image/*" class="submit-button-img"><br><br>  
                <input type="submit" value="Отправить" class="submit-button">  
            </form>
            
            

    </body> 
    </html>