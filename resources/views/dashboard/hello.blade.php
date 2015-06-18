@extends('dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block">
            Кількість зареєстрованих продуктів: {{$products_count}} <br/>
            Кількість архівних продуктів: {{$products_arhive_count}} <br/>
        </div>
    </div>
@endsection