@extends('layouts.app')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> SimpleBalances / Edit #{{$simple_balance->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('simple_balances.update', $simple_balance->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('user_id')) has-error @endif">
                       <label for="user_id-field">User_id</label>
                    <input type="text" id="user_id-field" name="user_id" class="form-control" value="{{ is_null(old("user_id")) ? $simple_balance->user_id : old("user_id") }}"/>
                       @if($errors->has("user_id"))
                        <span class="help-block">{{ $errors->first("user_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('movement_type')) has-error @endif">
                       <label for="movement_type-field">Movement_type</label>
                    <input type="text" id="movement_type-field" name="movement_type" class="form-control" value="{{ is_null(old("movement_type")) ? $simple_balance->movement_type : old("movement_type") }}"/>
                       @if($errors->has("movement_type"))
                        <span class="help-block">{{ $errors->first("movement_type") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('usd_amount')) has-error @endif">
                       <label for="usd_amount-field">Usd_amount</label>
                    <input type="text" id="usd_amount-field" name="usd_amount" class="form-control" value="{{ is_null(old("usd_amount")) ? $simple_balance->usd_amount : old("usd_amount") }}"/>
                       @if($errors->has("usd_amount"))
                        <span class="help-block">{{ $errors->first("usd_amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('local_amount')) has-error @endif">
                       <label for="local_amount-field">Local_amount</label>
                    <input type="text" id="local_amount-field" name="local_amount" class="form-control" value="{{ is_null(old("local_amount")) ? $simple_balance->local_amount : old("local_amount") }}"/>
                       @if($errors->has("local_amount"))
                        <span class="help-block">{{ $errors->first("local_amount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('credits')) has-error @endif">
                       <label for="credits-field">Credits</label>
                    <input type="text" id="credits-field" name="credits" class="form-control" value="{{ is_null(old("credits")) ? $simple_balance->credits : old("credits") }}"/>
                       @if($errors->has("credits"))
                        <span class="help-block">{{ $errors->first("credits") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('exchange_rate_id')) has-error @endif">
                       <label for="exchange_rate_id-field">Exchange_rate_id</label>
                    <input type="text" id="exchange_rate_id-field" name="exchange_rate_id" class="form-control" value="{{ is_null(old("exchange_rate_id")) ? $simple_balance->exchange_rate_id : old("exchange_rate_id") }}"/>
                       @if($errors->has("exchange_rate_id"))
                        <span class="help-block">{{ $errors->first("exchange_rate_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('movement_date')) has-error @endif">
                       <label for="movement_date-field">Movement_date</label>
                    <input type="text" id="movement_date-field" name="movement_date" class="form-control" value="{{ is_null(old("movement_date")) ? $simple_balance->movement_date : old("movement_date") }}"/>
                       @if($errors->has("movement_date"))
                        <span class="help-block">{{ $errors->first("movement_date") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('simple_balances.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
