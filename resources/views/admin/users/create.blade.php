@extends('layouts.admin')





@section('content')


    <h1>create users</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    {{csrf_field()}}
<div class="form-group">
{!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('email','Email') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('role_id','Role') !!}
    {!! Form::select('role_id',[''=>'choose options'] + $roles,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('is_active','Status') !!}
    {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
</div>
    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','photo') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}
    </div>
    {!!Form::close() !!}
@include('includes.form_error')
@stop