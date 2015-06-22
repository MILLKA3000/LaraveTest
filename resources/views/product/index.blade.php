@extends('app')

@section('content')
    <legend>{{$products->titletext}}</legend>
    <div class="row center-block">
        <?php foreach ($products as $product) {?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="/product/{{$product->id}}" class="center-block thumbnail" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span class="text-center help-block" style="font-size:14pt;">{{$product->name}}</span><br/>
                    </div>
                    <div >
                        <img class="center-block img-circle img-responsive" width="200" src="{{$product->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            Ціна: <span class="text-right">{{$product->price}}грн</span>
                            {{$product->discount==0?'':' ('.'Знижка: '}}<span class="text-right">{{$product->discount==0?'':$product->discount.'%)'}}</span><br/>
                            Остаточна: <span class="text-right">{{$product->price - ($product->price * ($product->discount/100))}}грн</span><br/>
                            <img src="http://s1.iconbird.com/ico/0512/circularicons/w16h161337840515clock.png">
                            <span style="font-size:10pt;" >{{$product->time}}хв</span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            Інгредієнти страви: <br/>
                            <div class="help-block">
                                @foreach ($product->indigrients as $indi)
                                    {{$indi->indigrientname->name}} - {{$indi->weight}}гр.<br/>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            Опис:
                            <div class="help-block">
                                <span class="text-justify">{{$product->title}}</span>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        <?php }?>
    </div>
@endsection


