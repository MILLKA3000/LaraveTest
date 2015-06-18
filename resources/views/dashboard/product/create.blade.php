@extends('dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Створення нового продукту:  </div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ $url }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Назва</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Опис</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Картинка</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pictureurl" value="{{ old('pictureurl') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Ціна</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Знижка</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="discount" value="{{ old('discount') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Час приготування</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="time" value="{{ old('time') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Категорія</label>
                            <div class="col-md-6">
                                <select name="category_id" class="form-control">
                                    @foreach($product->category as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Активний</label>
                            <div class="col-md-6">
                                <select name="active" class="form-control">
                                    <option value="1">Активний</option>
                                    <option value="0">Деактивний</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Архівний</label>
                            <div class="col-md-6">
                                <select name="arhive" class="form-control">
                                    <option value="1">Дійсний</option>
                                    <option value="0">Архівний</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
