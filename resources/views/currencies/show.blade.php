@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>Currencies / Show #{{$currency->id}}</h1>
        <form action="{{ route('currencies.destroy', $currency->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('currencies.edit', $currency->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="entity">ENTITY</label>
                     <p class="form-control-static">{{$currency->entity}}</p>
                </div>
                    <div class="form-group">
                     <label for="currency">CURRENCY</label>
                     <p class="form-control-static">{{$currency->currency}}</p>
                </div>
                    <div class="form-group">
                     <label for="code">CODE</label>
                     <p class="form-control-static">{{$currency->code}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$currency->status}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('currencies.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection