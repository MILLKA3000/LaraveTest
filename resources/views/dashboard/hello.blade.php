@extends('app')

@section('content')
<a href="/user/create" class="btn btn-success">Create New User</a>
    <legend>Users</legend>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-lg-offset-2">
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
                <a href="/user/{{$user->id}}/show" class="btn btn-default">Show</a>
                <a href="/user/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        @endforeach
    </table>
</div>
@endsection