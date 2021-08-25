@extends('layouts.main')

@section('title', $category->name)

@section('custom_css')
    <link rel="stylesheet" href="/css/{{$category->alias}}.css">
    @endsection

@section('content')
    <div class="container">
        <div class="content__content">
            <div class="content__row">
                @foreach($products as $product)
                    <div class="content__products">
                        <div class="content__img">
                            <a href="#" class="point"><img src="/{{$product->image}}"></a>
                        </div>
                        <div class="content__title">
                            <a href="#" class="point">{{$product->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
