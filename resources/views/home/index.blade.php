@extends('layouts.main')

@section('title', 'Wortex')

@section('custom_css')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
    <div class="container">
        <div class="content__content">
            <div class="content__row">
                @foreach($categories as $category)
                    <div class="content__products">
                        <div class="content__img">
                            <a href="{{route('showCategory', [$category->alias])}}" class="point"><img src="/{{$category->image}}"></a>
                        </div>
                        <div class="content__title">
                            <a href="{{route('showCategory', [$category->alias])}}" class="point">{{$category->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
