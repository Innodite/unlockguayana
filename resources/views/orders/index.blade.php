@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Orders
            <a class="btn btn-success pull-right" href="{{ route('orders.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($orders->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER_ID</th>
                        <th>ORDER_NUMBER</th>
                        <th>CONTROL_NUMBER</th>
                        <th>CREDITS</th>
                        <th>ORDER_DATE</th>
                        <th>STATUS_CHANGE_DATE</th>
                        <th>STATUS</th>
                        <th>IP</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->user_id}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->control_number}}</td>
                    <td>{{$order->credits}}</td>
                    <td>{{$order->order_date}}</td>
                    <td>{{$order->status_change_date}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->ip}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('orders.show', $order->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('orders.edit', $order->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $orders->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection