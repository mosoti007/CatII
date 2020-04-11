@extends('Mosoti.layouts.app')
@section('content')
{!! Form::open(['action' => 'FeesController@store','method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('student_name', 'First name')}}
    {{Form::text('student_name', '', ['class' => 'form-control', 'placeholder' => 'First name'])}}
</div>
<div class="form-group">
    {{Form::label('date_of_payment', 'date')}}
    {{Form::date('date_of_payment', '', [ 'class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('amount_paid', 'Amount paid')}}
    {{Form::text('amount_paid', '', [ 'class' => 'form-control', 'placeholder' => 'Amount paid'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection