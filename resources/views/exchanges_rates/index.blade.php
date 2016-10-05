@extends('layouts.app')

@section('header')
  <div class="page-header clearfix">
    <h1>
      <i class="glyphicon glyphicon-align-justify"></i> ExchangesRates
      <a class="btn btn-success pull-right" href="{{ route('exchanges_rates.create') }}">
        <i class="glyphicon glyphicon-plus"></i> Create
      </a>
    </h1>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if($exchanges_rates->count())
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>CURRENCY_ID</th>
              <th>CHANGE_DATE</th>
              <th>RATE</th>
              <th>NUMBER_MODIFYING</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>
          <tbody>
            @foreach($exchanges_rates as $exchanges_rate)
            <tr>
              <td>{{$exchanges_rate->id}}</td>
              <td>{{$exchanges_rate->currency->currency}}</td>
              <td>{{$exchanges_rate->change_date}}</td>
              <td>{{$exchanges_rate->rate}}</td>
              <td>{{$exchanges_rate->number_modifying}}</td>
              <td class="text-right">
                <a class="btn btn-xs btn-primary" href="{{ route('exchanges_rates.show', $exchanges_rate->id) }}">
                <i class="glyphicon glyphicon-eye-open"></i> View</a>
                <a class="btn btn-xs btn-warning" href="{{ route('exchanges_rates.edit', $exchanges_rate->id) }}">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <form action="{{ route('exchanges_rates.destroy', $exchanges_rate->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $exchanges_rates->render() !!}
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      @endif
    </div>
  </div>
@endsection