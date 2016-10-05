@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>ApisConfigs / Show #{{$apis_config->id}}</h1>
        <form action="{{ route('apis_configs.destroy', $apis_config->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('apis_configs.edit', $apis_config->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="api_name">API_NAME</label>
                     <p class="form-control-static">{{$apis_config->api_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_type">API_TYPE</label>
                     <p class="form-control-static">{{$apis_config->api_type}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_url_base">API_URL_BASE</label>
                     <p class="form-control-static">{{$apis_config->api_url_base}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_request_format">API_REQUEST_FORMAT</label>
                     <p class="form-control-static">{{$apis_config->api_request_format}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_user_name">API_USER_NAME</label>
                     <p class="form-control-static">{{$apis_config->api_user_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_key">API_KEY</label>
                     <p class="form-control-static">{{$apis_config->api_key}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_secret">API_SECRET</label>
                     <p class="form-control-static">{{$apis_config->api_secret}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_cli_increased_percentage">API_CLI_INCREASED_PERCENTAGE</label>
                     <p class="form-control-static">{{$apis_config->api_cli_increased_percentage}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_dev_increased_percentage">API_DEV_INCREASED_PERCENTAGE</label>
                     <p class="form-control-static">{{$apis_config->api_dev_increased_percentage}}</p>
                </div>
                    <div class="form-group">
                     <label for="api_status">API_STATUS</label>
                     <p class="form-control-static">{{$apis_config->api_status}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('apis_configs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection