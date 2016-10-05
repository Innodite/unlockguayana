@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>AppConfigs / Show #{{$app_config->id}}</h1>
        <form action="{{ route('app_configs.destroy', $app_config->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('app_configs.edit', $app_config->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="meta_name">META_NAME</label>
                     <p class="form-control-static">{{$app_config->meta_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="meta_value">META_VALUE</label>
                     <p class="form-control-static">{{$app_config->meta_value}}</p>
                </div>
                    <div class="form-group">
                     <label for="meta_description">META_DESCRIPTION</label>
                     <p class="form-control-static">{{$app_config->meta_description}}</p>
                </div>
                    <div class="form-group">
                     <label for="meta_info">META_INFO</label>
                     <p class="form-control-static">{{$app_config->meta_info}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('app_configs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection