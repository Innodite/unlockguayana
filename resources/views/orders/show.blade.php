@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>Orders / Show #{{$order->id}}</h1>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('orders.edit', $order->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <p class="form-control-static">{{$order->user_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="order_number">ORDER_NUMBER</label>
                     <p class="form-control-static">{{$order->order_number}}</p>
                </div>
                    <div class="form-group">
                     <label for="control_number">CONTROL_NUMBER</label>
                     <p class="form-control-static">{{$order->control_number}}</p>
                </div>
                    <div class="form-group">
                     <label for="credits">CREDITS</label>
                     <p class="form-control-static">{{$order->credits}}</p>
                </div>
                    <div class="form-group">
                     <label for="order_date">ORDER_DATE</label>
                     <p class="form-control-static">{{$order->order_date}}</p>
                </div>
                    <div class="form-group">
                     <label for="status_change_date">STATUS_CHANGE_DATE</label>
                     <p class="form-control-static">{{$order->status_change_date}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$order->status}}</p>
                </div>
                    <div class="form-group">
                     <label for="ip">IP</label>
                     <p class="form-control-static">{{$order->ip}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('orders.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection