<?php
$title1 = 'Гудзовский';
date_default_timezone_set("Europe/Moscow");
$today = date('d.m.Y в H-i:s');  
?>
<head>
    <meta charset="utf-8">
    <title>FirstPage</title>
    <!-- подключение стилей gooleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <!-- подключние файла стилей -->
    <link rel="stylesheet" href="style.css">
    <script src="script_1.js"></script>
</head>
<body>
    <header>
        <a href="main.php" id="logo">MielPops</a>
        <span class="right">
            <a href="one_form.html"><span class="nav">Обратная связь</span></a>
            <a href="two_form.html"><span class="nav">Войти</span></a>
        </span>
    </header>

    <div class="wrap">
        <main class="main">
            <section class="fun">
                <h1>Функция возведения в степень</h1>
                <p id="pow">2^3 = </p>
                    <button onclick="pow(2, 3)">Push</button>
            </section>
            <section class="fun">
                <h1>Функция нахождения НОДа</h1>
                <p id="gsd">НОД (6, 10) = </p>
                    <button onclick="gsd(10, 6)">Push</button>  
            </section> 
            <section class="fun">
                <h1>Функция нахождения MIN цифры числа</h1>  
                <p id="minDigit">Минимальная цифра в 11 - это </p>
                <button onclick="minDigit(11)">Push</button> 
            </section> 

            <section class="fun">
                <h1>Плюрализация</h1>
                <p id="pluralizeRecords">Сколько записей было найдено? </p>
                <button onclick="pluralizeRecords(22)">Push</button> 
            </section>  
            <section class="fun">
                <h1>Числа Фибоначчи</h1>
                <p id="fibb">6-ое число Фибоначчи - это </p>
                <button onclick="fibb(52)">Push</button>
            </section>  
        </main>


        <footer>
            <span class="left">Все права защищены &copy; <?= $today?></span>
            <span class="right">
                <span class="contact">+7 (900) 235-75-07</span>
                <span class="contact">mark_gudzovskiy@mail.ru</span>
            </span>
        
        </footer>

    </div>
</body>