@extends('layouts.app')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> ExchangesRates / Edit #{{$exchanges_rate->id}}</h1>
    </div>
@endsection

@section('content')
  @include('error')

  <div class="row">
    <div class="col-md-12">
      {!! Form::open(['route' => ['exchanges_rates.update', $exchanges_rate], 'method' => 'PUT']) !!}
        @include('exchanges_rates.form')
                
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">Save</button>
          <a class="btn btn-link pull-right" href="{{ route('exchanges_rates.index') }}">
          <i class="glyphicon glyphicon-backward"></i>  Back</a>
        </div>
      {!! Form::close() !!}

    </div>
  </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({format: 'dd/mm/yyyy'});
  </script>
@endsection
