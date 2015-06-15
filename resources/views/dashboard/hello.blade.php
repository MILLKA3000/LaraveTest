@extends('app')

@section('content')
    <legend>Users</legend>
    <table class="table-bordered table" >
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
               Login
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
                {{ $user->login }}
            </td>
            <td>
                <a href="/user/{{$user->id}}/show" class="btn btn-default">Show</a>
                <a href="/user/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
@endsection