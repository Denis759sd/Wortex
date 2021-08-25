<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/style.css">
    @yield('custom_css')
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__content">
                <div class="header__row">
                    <div class="header__emblem">
                        <img src="/img/header/emblem.png">
                    </div>
                    <div class="header__phone">
                        <div class="header__phone-img">
                            <img src="/img/header/phone-call.png">
                        </div>
                        <ul class="header__numbers">
                            @foreach($phones as $phone)
                                <li><a href="tel: {{$phone->number}}">+{{$phone->number}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="header__place">
                        <div class="header__placeholder-img">
                            <img src="/img/header/placeholder.png">
                        </div>
                        <div class="header__placeholder-text">
                            г.Гродно
                        </div>
                    </div>
                    <div class="header__time">
                        <div class="header__clock-img">
                            <img src="/img/header/clock.png">
                        </div>
                        <div class="header__clock">
                            9:00-18:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="menu">
        <div class="container">
            <div class="menu__content">
                <div class="menu__row">
                    <div class="menu__point">
                        <a href="{{route('home')}}" class="point">главная</a>
                    </div>
                    <div class="menu__point">
                        <a href="{{route('delivery')}}" class="point">доставка и оплата </a>
                    </div>
                    <div class="menu__point ">
                        <a href="{{route('repair')}}" class="point">ремонт старой техники</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
