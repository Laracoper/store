<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Каркассон</title>
    <link rel="stylesheet" href="../style/image.css">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/product.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="../images/logo.png" alt="Логотип">
            <div class="shop_name">
                <strong>Магазин настольных игр "Сундук с сокровищами"</strong>
            </div>
            <ul class="menu">
                <li class="root"><a href="/">ГлавнаяЯ</a></li>
                <li class="root">
                    <a href="{{route('catalog')}}">Каталог</a>
                    <ul class="dropdown">
                        <li><a href="{{route('karkasson')}}">Каркассон</a></li>
                        <li><a href="{{route('machikoro')}}">Мачи-Кро</a></li>
                        <li><a href="{{route('manchkin')}}">Манчкин</a></li>
                    </ul>
                </li>
                <li class="root"><a href="{{route('contacts')}}">Контакты</a></li>
            </ul>
        </div>
        <hr>

        @yield('content')

        <hr>
        <div class="footer">
            &copy;"Все права защищены"<br>
            Данные взяты с Википедии
        </div>
    </div>
</body>

</html>