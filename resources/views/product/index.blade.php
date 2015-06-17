@extends('app')

@section('content')
<div class="row center-block">
    <?php foreach ($products as $product) {?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="#" class="center-block thumbnail" >
                <div >
                    <img class="center-block img-circle img-responsive" data-src="holder.js/100%x100" src="{{$product->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <span class="text-left">{{$product->name}}</span>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        Ціна: <span class="text-right">{{$product->price}}грн</span>
                        {{$product->discount==0?'':'Знижка: '}}<span class="text-right">{{$product->discount==0?'':$product->discount.'%'}}</span>
                        Остаточна: <span class="text-right">{{$product->price - ($product->price * ($product->discount/100))}}грн</span>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        Індіградіенти страви: <br/>
                        <div class="help-block">
                            <?php foreach($product->name_indigradient as $indigrient){?>
                                <span>{{$indigrient->name}} : {{$product->indigrients[0]->weight}}гр.</span><br/>
                            <?php }?>
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
@endsection
</div>

