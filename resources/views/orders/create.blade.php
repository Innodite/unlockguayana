@extends('layouts.app')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Orders / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('orders.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('user_id')) has-error @endif">
                       <label for="user_id-field">User_id</label>
                    <input type="text" id="user_id-field" name="user_id" class="form-control" value="{{ old("user_id") }}"/>
                       @if($errors->has("user_id"))
                        <span class="help-block">{{ $errors->first("user_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('order_number')) has-error @endif">
                       <label for="order_number-field">Order_number</label>
                    <input type="text" id="order_number-field" name="order_number" class="form-control" value="{{ old("order_number") }}"/>
                       @if($errors->has("order_number"))
                        <span class="help-block">{{ $errors->first("order_number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('control_number')) has-error @endif">
                       <label for="control_number-field">Control_number</label>
                    <input type="text" id="control_number-field" name="control_number" class="form-control" value="{{ old("control_number") }}"/>
                       @if($errors->has("control_number"))
                        <span class="help-block">{{ $errors->first("control_number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('credits')) has-error @endif">
                       <label for="credits-field">Credits</label>
                    <input type="text" id="credits-field" name="credits" class="form-control" value="{{ old("credits") }}"/>
                       @if($errors->has("credits"))
                        <span class="help-block">{{ $errors->first("credits") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('order_date')) has-error @endif">
                       <label for="order_date-field">Order_date</label>
                    <input type="text" id="order_date-field" name="order_date" class="form-control" value="{{ old("order_date") }}"/>
                       @if($errors->has("order_date"))
                        <span class="help-block">{{ $errors->first("order_date") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status_change_date')) has-error @endif">
                       <label for="status_change_date-field">Status_change_date</label>
                    <input type="text" id="status_change_date-field" name="status_change_date" class="form-control" value="{{ old("status_change_date") }}"/>
                       @if($errors->has("status_change_date"))
                        <span class="help-block">{{ $errors->first("status_change_date") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('status')) has-error @endif">
                       <label for="status-field">Status</label>
                    <input type="text" id="status-field" name="status" class="form-control" value="{{ old("status") }}"/>
                       @if($errors->has("status"))
                        <span class="help-block">{{ $errors->first("status") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ip')) has-error @endif">
                       <label for="ip-field">Ip</label>
                    <input type="text" id="ip-field" name="ip" class="form-control" value="{{ old("ip") }}"/>
                       @if($errors->has("ip"))
                        <span class="help-block">{{ $errors->first("ip") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('orders.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
