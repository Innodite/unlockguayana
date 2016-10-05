@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> OrderDetails
            <a class="btn btn-success pull-right" href="{{ route('order_details.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($order_details->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ORDER_ID</th>
                        <th>SERVICE_DESCRIPTION</th>
                        <th>SERVICE_INFO</th>
                        <th>SERVICE_API</th>
                        <th>CREDITS</th>
                        <th>STATUS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($order_details as $order_detail)
                            <tr>
                                <td>{{$order_detail->id}}</td>
                                <td>{{$order_detail->order_id}}</td>
                    <td>{{$order_detail->service_description}}</td>
                    <td>{{$order_detail->service_info}}</td>
                    <td>{{$order_detail->service_api}}</td>
                    <td>{{$order_detail->credits}}</td>
                    <td>{{$order_detail->status}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('order_details.show', $order_detail->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('order_details.edit', $order_detail->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('order_details.destroy', $order_detail->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $order_details->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection