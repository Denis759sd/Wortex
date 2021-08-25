@extends('layouts.main')

@section('title', 'Доставка и оплата')

@section('custom_css')
    <link rel="stylesheet" href="css/delivery.css">
@endsection

@section('content')
    <div class="container">
        <div class="content__content">
            <div class="content__title">
                Доставка и оплата
            </div>
            <div class="content__subtitle text">
                Способы оплаты: наличный и безналичный расчет. Чек, накладная, расчет по банковской карте.
            </div>
            <div class="content__img">
                <img src="/img/delivery/img.png">
            </div>
            <div class="content__info text">
                Доставка: доставка товара осуществляется в день оформления заявки или на следующий день. Согласовывается по телефону.
            </div>
        </div>
    </div>
@endsection
