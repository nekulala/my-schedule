@extends('layouts.app')

@section('content')

@if(Auth::check())
{!! Auth::user()->name !!}
@else
<div class="center jumbotron">
    <div class="text-center">
        <h1 class="display-3">My Schedule</h1>
        {!! link_to_route('signup.get','新規登録',[],['class' => 'btn btn-primary btn-lg']) !!}
        {!! link_to_route('login','ログイン',[],['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>
@endif

@endsection