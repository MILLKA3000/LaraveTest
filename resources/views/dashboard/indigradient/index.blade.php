@extends('dashboard')

@section('content')
    <legend>Інгредіент</legend>
    <div class="right text-right" style="margin-right: 25px">
        <a href="/dashboard/indi/create" class="btn btn-success">Новий інгредіент</a><br/>
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
               <td>
                   Опис
               </td>
               <td>
                   Категорія
               </td>
               <td>
                   Action
               </td>
           </tr>
            @foreach ($indi as $c)
            <tr>
                <td>
                    <img class="center-block img-circle img-responsive" width="50" src="">
                </td>
                <td>
                    {{ $c->name }}
                </td>
                <td>
                    {{ $c->title }}
                </td>
                <td>
                    {{ $c->getCategoryindigrient->name }}
                </td>
                <td>
                    <a href="/dashboard/indi/{{$c->id}}/show" class="btn btn-default">Show</a>
                    <a href="/dashboard/indi/{{$c->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/dashboard/indi/{{$c->id}}/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
        @include('pagination', ['paginator' => $indi])
    </div>
@endsection