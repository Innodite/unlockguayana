@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>SimpleBalances / Show #{{$simple_balance->id}}</h1>
        <form action="{{ route('simple_balances.destroy', $simple_balance->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('simple_balances.edit', $simple_balance->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$simple_balance->user_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="movement_type">MOVEMENT_TYPE</label>
                     <p class="form-control-static">{{$simple_balance->movement_type}}</p>
                </div>
                    <div class="form-group">
                     <label for="usd_amount">USD_AMOUNT</label>
                     <p class="form-control-static">{{$simple_balance->usd_amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="local_amount">LOCAL_AMOUNT</label>
                     <p class="form-control-static">{{$simple_balance->local_amount}}</p>
                </div>
                    <div class="form-group">
                     <label for="credits">CREDITS</label>
                     <p class="form-control-static">{{$simple_balance->credits}}</p>
                </div>
                    <div class="form-group">
                     <label for="exchange_rate_id">EXCHANGE_RATE_ID</label>
                     <p class="form-control-static">{{$simple_balance->exchange_rate_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="movement_date">MOVEMENT_DATE</label>
                     <p class="form-control-static">{{$simple_balance->movement_date}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('simple_balances.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection