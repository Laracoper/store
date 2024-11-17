@extends('inc.layout')

@section('content')
<h1>Каталог</h1>
        <div class="catalo_wrap">
            <div class="catalog_product_unit">
                <a href="{{route('karkasson')}}">
                    <img src="images/karkasson.jpg" alt="Каркассон" title="Настольная игра Каркассон" class="catalog_image">
                    Каркассон</a>
            </div>
            <div class="catalog_product_unit">
                <a href="{{route('karkasson')}}">
                    <img src="images/karkasson.jpg" alt="Каркассон" title="Настольная игра Каркассон" class="catalog_image">
                    Каркассон</a>
            </div>
            <div class="catalog_product_unit">
                <a href="{{route('machikoro')}}">
                    <img src="images/machi-koro.jpg" alt="Мачи Коро" title="Настольная игра Мачи Коро" class="catalog_image">
                    Мачи Коро</a>
            </div>
            <div class="catalog_product_unit">
                <a href="{{route('machikoro')}}">
                    <img src="images/machi-koro.jpg" alt="Мачи Коро" title="Настольная игра Мачи Коро" class="catalog_image">
                    Мачи Коро</a>
            </div>
            <div class="catalog_product_unit">
                <a href="{{route('manchkin')}}">
                    <img src="images/manchkin.jpg" alt="Манчкин" title="Настольная игра Манчкин" class="catalog_image">
                    Манчкин</a>
            </div>
            <div class="catalog_product_unit">
                <a href="{{route('manchkin')}}">
                    <img src="images/manchkin.jpg" alt="Манчкин" title="Настольная игра Манчкин" class="catalog_image">
                    Манчкин</a>
            </div>
        </div>
@endsection