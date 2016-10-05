@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>OrderDetails / Show #{{$order_detail->id}}</h1>
        <form action="{{ route('order_details.destroy', $order_detail->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('order_details.edit', $order_detail->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="order_id">ORDER_ID</label>
                     <p class="form-control-static">{{$order_detail->order_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="service_description">SERVICE_DESCRIPTION</label>
                     <p class="form-control-static">{{$order_detail->service_description}}</p>
                </div>
                    <div class="form-group">
                     <label for="service_info">SERVICE_INFO</label>
                     <p class="form-control-static">{{$order_detail->service_info}}</p>
                </div>
                    <div class="form-group">
                     <label for="service_api">SERVICE_API</label>
                     <p class="form-control-static">{{$order_detail->service_api}}</p>
                </div>
                    <div class="form-group">
                     <label for="credits">CREDITS</label>
                     <p class="form-control-static">{{$order_detail->credits}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$order_detail->status}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('order_details.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection