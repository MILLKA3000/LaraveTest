@extends('dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Інгредієнти для продукта: {{$product->name}} </div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{$url}}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img class="center-block img-circle img-responsive" width="250" src="{{$product->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                Опис: {{ $product->title }}<br/>
                                Категорія: {{ $product->getCategory->name }}<br/>
                                Час приготування: {{ $product->time}}хв<br/>
                            </div>
                        </div>

                        @include('dashboard.indigradient.attr.block');

                        <div class="form-group">
                            <div class="col-md-12 center-block text-center">
                                <button type="submit" class="btn btn-primary">
                                    Save
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

