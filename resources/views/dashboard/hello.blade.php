@extends('dashboard')

@section('content')
    <div class="row">
        Кількість зареєстрованих продуктів: {{$products_count}} <br/>
        Кількість архівних продуктів: {{$products_arhive_count}} <br/>
    </div>
@endsection