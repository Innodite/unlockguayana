@extends('layouts.app')

@section('header')
  <div class="page-header clearfix">
    <h1>
      <i class="glyphicon glyphicon-align-justify"></i> ApisConfigs
      <a class="btn btn-success pull-right" href="{{ route('apis_configs.create') }}">
      <i class="glyphicon glyphicon-plus"></i> Create</a>
    </h1>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if($apis_configs->count())
      <table class="table table-condensed table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>API_NAME</th>
            <th>API_TYPE</th>
            <th>API_URL_BASE</th>
            <th>API_USER_NAME</th>
            <th>% FEES CLIENT</th>
            <th>% FEES DEVELOPERS</th>
            <th>API_STATUS</th>
            <th class="text-right">OPTIONS</th>
          </tr>
        </thead>
        <tbody>
          @foreach($apis_configs as $apis_config)
            <tr>
              <td>{{$apis_config->id}}</td>
              <td>{{$apis_config->api_name}}</td>
              <td>{{$apis_config->api_type}}</td>
              <td>{{$apis_config->api_url_base}}</td>
              <td>{{$apis_config->api_user_name}}</td>
              <td>{{$apis_config->api_cli_increased_percentage}}</td>
              <td>{{$apis_config->api_dev_increased_percentage}}</td>
              <td>{{$apis_config->api_status}}</td>
              <td class="text-right">
                <a class="btn btn-xs btn-primary" href="{{ route('apis_configs.show', $apis_config->id) }}">
                <i class="glyphicon glyphicon-eye-open"></i> View</a>
                <a class="btn btn-xs btn-warning" href="{{ route('apis_configs.edit', $apis_config->id) }}">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <form action="{{ route('apis_configs.destroy', $apis_config->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        </table>
        {!! $apis_configs->render() !!}
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      @endif
    </div>
  </div>
@endsection