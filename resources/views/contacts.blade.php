@extends('inc.layout')

@section('content')
<fieldset>
            <legend>Спросите нас</legend>
            @if ($errors->any())
            <ul>
                @foreach ($errors as $err)
                <li>{{$err}}</li>
                @endforeach
            </ul>
            @endif
            <form action="/contacts/form" method="post" class="contact_form">
                @csrf
                <label for="username">Ваше имя</label>
                <input type="text" id="username" name="username"><br>
                <label for="email">Ваш email</label>
                <input type="email" id="email" name="email" placeholder="name@example.com"><br>
                <label for="subject">О чем вы хотите нас спросить</label>
                <input type="text" id="subject" name="subject"><br>
                <label for="game">Название игры</label>
                <input type="text" id="game" name="game"><br>

                <textarea name="letter" id="letterBody" placeholder="Напишите здесь ваш вопрос\предложение"></textarea><br>

                <input type="submit" value="Отправить">
            </form>
        </fieldset>
        <h2>Наши контактные данные</h2>
        <p>
            <strong>Адрес: </strong>Suðurgata, 41, Рейкьявик, Исландия <br>
            <strong>Телефон: </strong> +354 (354) 123-456 <br>
            <strong>Email: </strong>contact@shop.com <br>
        </p>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A933ea6ad7d37c0e6d181bb01bf0e5d3e012cd58b8b0e957cfd86fc156d507af5&amp;width=100%25&amp;height=374&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection