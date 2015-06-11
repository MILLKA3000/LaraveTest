@extends('app')

@section('content')
    <legend>Users</legend>
    <table class="table-bordered table" >
       <tr>
           <td>
               Name
           </td>
       </tr>
    <?php foreach ($users as $user) {?>
        <tr>
           <td>
        <?= $user->fname; ?>
           </td>
       </tr>

    <?php }?>
@endsection