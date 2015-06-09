@extends('layouts.master')

    @section('content')
        {{$sssss}}
        {{ $name or 'Default' }}
        <div class="title">Laravel 5</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
    @endsection
</body>