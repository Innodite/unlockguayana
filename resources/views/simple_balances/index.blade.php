@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> SimpleBalances
            <a class="btn btn-success pull-right" href="{{ route('simple_balances.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($simple_balances->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER_ID</th>
                        <th>MOVEMENT_TYPE</th>
                        <th>USD_AMOUNT</th>
                        <th>LOCAL_AMOUNT</th>
                        <th>CREDITS</th>
                        <th>EXCHANGE_RATE_ID</th>
                        <th>MOVEMENT_DATE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($simple_balances as $simple_balance)
                            <tr>
                                <td>{{$simple_balance->id}}</td>
                                <td>{{$simple_balance->user_id}}</td>
                    <td>{{$simple_balance->movement_type}}</td>
                    <td>{{$simple_balance->usd_amount}}</td>
                    <td>{{$simple_balance->local_amount}}</td>
                    <td>{{$simple_balance->credits}}</td>
                    <td>{{$simple_balance->exchange_rate_id}}</td>
                    <td>{{$simple_balance->movement_date}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('simple_balances.show', $simple_balance->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('simple_balances.edit', $simple_balance->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('simple_balances.destroy', $simple_balance->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $simple_balances->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection