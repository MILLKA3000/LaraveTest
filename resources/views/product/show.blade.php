@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Продукт: {{$product->name}} </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{$url}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img class="center-block img-circle img-responsive" width="250" src="{{$product->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                Опис: {{ $product->title }}<br/>
                                Категорія: {{ $product->getCategory->name }}<br/>
                                Час приготування: {{ $product->time}}хв<br/>
                                Індігріенти<br/>
                                @foreach ($product->indigrients as $indi)
                                    <a href="/dashboard/indi/{{$indi->indigrientname->id}}/show">{{$indi->indigrientname->name}}  - {{$indi->weight}}гр</a>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                Кількість: <input type="text" name="qty"><h1>
                                <button type="submit" class="btn btn-primary">
                                    Добавити в Корзину
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

