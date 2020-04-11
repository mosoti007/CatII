@extends('Mosoti.layouts.app')
@section('content')
{!! Form::open(['action' => 'StudentController@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('first_name', 'First name')}}
    {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'First name'])}}
</div>
<div class="form-group">
    {{Form::label('last_name', 'Last Name')}}
    {{Form::text('last_name', '', [ 'class' => 'form-control', 'placeholder' => 'Last name'])}}
</div>
<div class="form-group">
    {{Form::label('student_number', 'Student number')}}
    {{Form::text('student_number', '', [ 'class' => 'form-control', 'placeholder' => 'Student number'])}}
</div>
<div class="form-group">
    {{Form::label('address', 'Address')}}
    {{Form::text('address', '', [ 'class' => 'form-control', 'placeholder' => 'Adress'])}}
</div>
<div class="form-group">
    {{Form::label('date_of_birth', 'DOB')}}
    {{Form::date('date_of_birth', '', [ 'class' => 'form-control'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection