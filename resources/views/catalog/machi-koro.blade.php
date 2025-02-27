@extends('inc.layout')

@section('content')
<h1>Мачи Коро</h1>
        <div class="product_img_and_short_descroption">
            <a href="../images/machi-koro.jpg" target="_blank">
                <img src="../images/machi-koro.jpg" alt="Мачи Коро" class="game_image">
            </a>
            <div class="product_short_description_wrap">
                <h2 class="product_header">Описание товара</h2>
                <p class="product_short_description">
                    <b>Мачи Коро</b> — игра для 2-5 игроков, которые хотят окунуться в уютную Японию. Вы берёте на
                    себя роль мэра маленького, но амбициозного городка. Как мэр, который любит свой город, Вы хотите
                    его
                    процветания и развития. Стройте закусочные и аэропорты, украшайте улочки садами и
                    достопримечательностями,
                    а
                    результат не заставит себя долго ждать. Но не забывайте, что близлежащие городки тоже не стоят на
                    месте, и
                    Вам предстоит вступить в нешуточную борьбу за право провозгласить свой город лучшим!
                </p>
                <a href="#" class="buy">Купить</a>
            </div>
        </div>

        <h2 class="product_header">Характеристики товара</h2>
        <ul class="product_features">
            <li>30 стартовых карт</li>
            <li>87 карт резерва</li>
            <li>60 монет различного номинала</li>
            <li>2 кубика</li>
            <li>Правила игры</li>
        </ul>

        <h2 class="product_header">Подробное описание товара</h2>
        <div class="product_full_description">
            <p>
                <b>Как играть</b><br>
                Каждый игрок получает 6 стартовых карт, две из которых обычные постройки, а четыре
                достопримечательности,
                которые еще надо построить, и 3 монетки. Карты раскладываются перед игроками. Это и есть ваш маленький
                городок. Постепенно Вы будете застраивать его новыми зданиями и развивать. Ход игроков делится на две
                фазы:<br>
            </p>
            <ul>
                <li><b>Фаза Доходов</b>, в которую бросаются 1 или 2 кубика и по результатам броска игроки получают
                    доход.
                    Доход зависит от зданий имеющиеся в вашем городе, на которых указано число, при котором эффект
                    карты
                    срабатывает, и сам эффект здания
                </li>
                <li><b>Фаза Строительства</b>, в которую игроки решают, строить ли им предприятие или
                    достопримечательность
                    или нет. Если Вы решили строить, выбираете здание из резерва и оплачиваете стоимость постройки в
                    банк.
                    Если Вы хотите построить достопримечательность, то выплачиваете её цену в банк и переворачиваете
                    карту
                    перед собой. Если же Вы решили не заниматься строительством в этот ход, то передаёте ход следующему
                    игроку.
                </li>
            </ul>
            <p>
                <b>Кто победил?</b><br>
                Чтобы узнать, кто показал себя лучшим мэром, нужно осмотреть город. Тот из игроков, который первым
                построит
                четыре достопримечательности в своём городе, объявляется победителем.
            </p>
        </div>

        <h2 class="product_header">Особенности игры</h2>
        <p class="product_additional_description">
            Настольная игра "Мачи Коро" стала абсолютным хитом в Японии и завоевала множество поклонников по всему
            миру.
            Её необычный лаконичный дизайн, простые правила и приятный игровой процесс превратят партии в незабываемое
            удовольствие.<br>
            У игры есть дополнение - "Мачи Коро плюс", которое расширит базовую игру и внесёт разнообразие в партии.
        </p>
@endsection
