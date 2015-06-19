@extends('app')

@section('content')

    <table class="table center-block table-responsive" style="margin: 10px;width:100%">
        <tbody class="">
        <tr>
            <td>Картинка</td>
            <td>Продукт</td>
            <td>Опис</td>
            <td>Кількість</td>
            <td>Ціна</td>
            <td>Знижка</td>
            <td>Остаточна</td>
            <td>Загальна</td>
            <td></td>
        </tr>
        </tbody>
        @foreach($prod_cart['products'] as $prod)
            <tr>
                <td>
                    <img class="center-block img-circle img-responsive" width="50" src="{{$prod->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                </td>
                <td>
                    {{$prod->name}}
                </td>
                <td>
                    {{$prod->title}}
                </td>
                <td>
                    {{$prod->qty}}шт.
                </td>
                <td>
                    {{$prod->price}}грн.
                </td>
                <td>
                    {{$prod->discount}}%
                </td>

                <td>
                    {{$prod->total_price_one_qty($prod)}}грн.
                </td>
                <td>
                    {{$prod->total_price_one_qty($prod)*$prod->qty}}грн.
                </td>

                <td>
                    <span class="text-danger">X</span>
                </td>
            </tr>
        @endforeach
        <tr style="border-top: 2px solid">
            <td colspan="7">Загальна ціна:</td>
            <td colspan="2">
                {{$prod_cart['total_price']}}грн.
            </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary center-block" style="margin-bottom: 20px;">
        Оформити заказ
    </button>

@endsection