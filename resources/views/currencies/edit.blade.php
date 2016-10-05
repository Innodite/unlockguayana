@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Currencies / Edit #{{$currency->id}}</h1>
    </div>
@endsection

@section('content')
  @include('error')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['currencies.update', $currency], 'method' => 'PUT']) !!}
        @include('currencies.form')
               
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Save</button>
          <a class="btn btn-link pull-right" href="{{ route('currencies.index') }}">
          <i class="glyphicon glyphicon-backward"></i>  Back</a>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection