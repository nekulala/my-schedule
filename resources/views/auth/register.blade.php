@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1>新規登録</h1>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {!! Form::open(['route' => 'signup.post']) !!}
            <div class="form-group">
                {!! Form::label('name','名前') !!}
                {!! Form::input('text','name',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','メールアドレス') !!}
                {!! Form::input('email','email',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','パスワード') !!}
                {!! Form::input('password','password',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            {{Form::submit('新規登録', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>    
</div>
@endsection