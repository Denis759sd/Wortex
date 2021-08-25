@extends('layouts.main')

@section('title', 'Ремонт старой техники')

@section('custom_css')
    <link rel="stylesheet" href="css/repair.css">
@endsection

@section('content')
    <div class="container">
        <div class="content__content">
            <div class="content__title">
                ремонт старой техники
            </div>
            <div class="content__img">
                <img src="/img/repair/img.png">
            </div>
            <div class="content__info">
                Вы можете заказать у нас ремонт своей старой техники или получить за старую технику скидку на новую
            </div>
        </div>
    </div>
@endsection
