@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Roles / Create </h1>
    </div>
@endsection

@section('content')
@include('error')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        @include('roles.form')
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Create</button>
          <a class="btn btn-link pull-right" href="{{ route('roles.index') }}">
          <i class="glyphicon glyphicon-backward"></i> Back</a>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection