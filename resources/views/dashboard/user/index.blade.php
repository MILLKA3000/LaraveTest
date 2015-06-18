@extends('dashboard')

@section('content')
    <legend>Користувачі</legend>
    <div class="right text-right" style="margin-right: 25px">
        <a href="/user/create" class="btn btn-success">Новий користувач</a><br/>
    </div>
    <legend></legend>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table-bordered table " >
           <tr>
               <td>
                   FName
               </td>
               <td>
                   LName
               </td>
               <td>
                   E-mail
               </td>
               <td>
                   Action
               </td>
           </tr>
            @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user->fname }}
                </td>
                <td>
                   {{ $user->lname }}
                </td>
                <td>
                    {{ $user->email }}
                </td>

                <td>
                    <a href="/dashboard/user/{{$user->id}}/show" class="btn btn-default">Show</a>
                    <a href="/dashboard/user/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                    <a href="/dashboard/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
@endsection