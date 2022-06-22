<? 
$data = require_once('datainfo.php');
$startData = $data['about'];
$arrayData = $data['contacts'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imga/klipartz.com.ico">
    <title>Мое резюме</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <script src="js/slide.js" defer></script>
</head>

<script type="text/javascript">
    let userName = prompt("Рады приветствовать! Как Вас зовут?", "Имя");
        function showMessage() {
            let message = 'Добро пожаловать, ' + userName + '!';
            alert(message);
        }
        showMessage();
  </script>

<body id="top">
    
    <div class="header">
        <button id="toggle-theme-btn"><input type="image" src="/imga/moon.png" alt="Луна" id="toggle-theme-image"></button>
        <div class="name">
            <h1>Страница моего резюме</h1>
        </div>
        <div class="menu">
            <ul><li><a href="#me">Обо мне</a></li>
                <li><a href="#edu">Моe образование</a></li>
                <li><a href="#contact">Мои контакты</a></li>
            </ul>
        </div>
    </div>
    
    <div class="slider">
        <div class="item">
            <img src="imga/14977255131412_1920x1200.jpg" alt="Первый слайд">
        </div>
        <div class="item">
            <img src="imga/52f2b5e2705bfb87d7f8b1a75f19a19c.jpeg" alt="Второй слайд">
        </div>
        <div class="item">
            <img src="imga/8f552adb3924e23b2b7cf6fb74e1362e.jpeg" alt="Третий слайд">
        </div>
        <a class="prev" onclick="minusSlide()">&#10094;</a>
        <a class="next" onclick="plusSlide()">&#10095;</a>
    </div>
    
    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
    </div>
    
    <div class="container">
        <div class="photo">
            <img src="imga/imeges.png" alt="Hello">
        </div>
        <div class="content">
            <hr>
            <p id="me"><h2>Обо мне</h2></p>
            <p><?=$startData['hello'] ?></p>
            <hr>
            <p id="edu"><h2>Моe образование</h2></p>
            <div class="photo1">
                <a href="#"><img src="imga/klipartz.com-_3_.ico" alt="Girl"></a>
            </div>

            <p><?=$startData['education'] ?></p>
            <hr>
            <p id="contact"><h2>Мои контакты</h2></p>
            <? foreach($arrayData as $value) {?>
            <p><?=$value['adress']?></p>
            <p><?=$value['email']?></p>
            <p><?=$value['phone']?></p>
            <? } ?>
        </div>
    </div>
    <div class="footer">
        <li4><a href="gb.ru">&#169 Все права защищены</a></li4>
        <li5><a href="#top">Наверх</a></li5>
    </div>
    
</body>
</html>