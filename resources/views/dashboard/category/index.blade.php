@extends('dashboard')

@section('content')
    <legend>Категорії</legend>
    <div class="right text-right" style="margin-right: 25px">
        <a href="/dashboard/category/create" class="btn btn-success">Нова категорія</a><br/>
    </div>
    <legend></legend>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs- center-block">
        <table class="table-bordered table " >
           <tr>
               <td>
                   Name
               </td>
               <td>
                   Active
               </td>
               <td>
                   Action
               </td>
           </tr>
            @foreach ($category as $c)
            <tr>
                <td>
                    {{ $c->name }}
                </td>
                <td>
                   {{ $c->active }}
                </td>
                <td>
                    <a href="/dashboard/category/{{$c->id}}/show" class="btn btn-default">Show</a>
                    <a href="/dashboard/category/{{$c->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/dashboard/category/{{$c->id}}/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
        @include('pagination', ['paginator' => $category])
    </div>
@endsection