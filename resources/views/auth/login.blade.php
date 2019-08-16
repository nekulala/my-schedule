@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1>ログイン</h1>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email','メールアドレス') !!}
                {!! Form::input('email','email',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','パスワード') !!}
                {!! Form::input('password','password',null,['class' => 'form-control']) !!}
            </div>
            {{Form::submit('ログイン', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        
        <p class="mt-4">新規登録がお済みでない方は{!! link_to_route('signup.get','こちら') !!}</p>
    </div>    
</div>
@endsection