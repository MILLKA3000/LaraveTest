@extends('dashboard')

@section('content')
    <legend>Продукти</legend>
    <div class="right text-right" style="margin-right: 25px">
        <a href="/dashboard/product/create" class="btn btn-success">Новий продукт</a><br/>
    </div>
    <legend></legend>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block">
        <table class="table-bordered table " >
           <tr>
               <td>
                   Картинка
               </td>
               <td>
                   Назва
               </td>
               <td width="200">
                   Опис
               </td>
               <td>
                   Інгредіенти
               </td>
               <td>
                   Ціна
               </td>
               <td>
                   Знижка
               </td>
               <td>
                   Актив
               </td>
               <td>
                   Архів
               </td>
               <td>
                   Категорія
               </td>
               <td>
                   Action
               </td>
           </tr>
            @foreach ($products as $c)
            <tr>
                <td>
                    <img class="center-block img-circle img-responsive" width="50" src="{{$c->pictureurl ?: 'http://www.iconarchive.com/download/i2262/aha-soft/food/hamburger.ico'}}">
                </td>
                <td>
                    {{ $c->name }}
                </td>
                <td>
                    {{ $c->title }}
                </td>
                <td>
                    @foreach ($c->indigrients as $indi)
                        <a href="/dashboard/indi/{{$indi->indigrientname->id}}/show">{{$indi->indigrientname->name}} - {{$indi->weight}}гр.</a><br/>
                    @endforeach
                    <a href="/dashboard/product/{{$c->id}}/attradd" class="btn btn-info">Добавити\Редагувати</a>
                </td>
                <td>
                    {{ $c->price }}
                </td>
                <td>
                    {{ $c->discount }}
                </td>
                <td>
                    {{ $c->active }}
                </td>
                <td>
                    {{ $c->arhive }}
                </td>
                <td>
                    <a href="/dashboard/category/{{$c->getCategory->id}}/show">{{ $c->getCategory->name }}</a>
                </td>

                <td>
                    <a href="/dashboard/product/{{$c->id}}/show" class="btn btn-default">Show</a>
                    <a href="/dashboard/product/{{$c->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/dashboard/product/{{$c->id}}/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
        @include('pagination', ['paginator' => $products])
    </div>
@endsection