@extends('layouts.app')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> OrderDetails / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('order_details.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('order_id')) has-error @endif">
                       <label for="order_id-field">Order_id</label>
                    <input type="text" id="order_id-field" name="order_id" class="form-control" value="{{ old("order_id") }}"/>
                       @if($errors->has("order_id"))
                        <span class="help-block">{{ $errors->first("order_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('service_description')) has-error @endif">
                       <label for="service_description-field">Service_description</label>
                    <input type="text" id="service_description-field" name="service_description" class="form-control" value="{{ old("service_description") }}"/>
                       @if($errors->has("service_description"))
                        <span class="help-block">{{ $errors->first("service_description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('service_info')) has-error @endif">
                       <label for="service_info-field">Service_info</label>
                    <input type="text" id="service_info-field" name="service_info" class="form-control" value="{{ old("service_info") }}"/>
                       @if($errors->has("service_info"))
                        <span class="help-block">{{ $errors->first("service_info") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('service_api')) has-error @endif">
                       <label for="service_api-field">Service_api</label>
                    <input type="text" id="service_api-field" name="service_api" class="form-control" value="{{ old("service_api") }}"/>
                       @if($errors->has("service_api"))
                        <span class="help-block">{{ $errors->first("service_api") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('credits')) has-error @endif">
                       <label for="credits-field">Credits</label>
                    <input type="text" id="credits-field" name="credits" class="form-control" value="{{ old("credits") }}"/>
                       @if($errors->has("credits"))
                        <span class="help-block">{{ $errors->first("credits") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('order_details.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
