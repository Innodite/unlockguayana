@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> AppConfigs / Edit #{{$app_config->id}}</h1>
    </div>
@endsection

@section('content')
@include('error')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['app_configs.update', $app_config], 'method' => 'PUT']) !!}
        @include('app_configs.form') 
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Save</button>
          <a class="btn btn-link pull-right" href="{{ route('app_configs.index') }}">
          <i class="glyphicon glyphicon-backward"></i>  Back</a>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection