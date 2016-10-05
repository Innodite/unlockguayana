@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> AppConfigs
            <a class="btn btn-success pull-right" href="{{ route('app_configs.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($app_configs->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>META_NAME</th>
                        <th>META_VALUE</th>
                        <th>META_DESCRIPTION</th>
                        <th>META_INFO</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($app_configs as $app_config)
                            <tr>
                                <td>{{$app_config->id}}</td>
                                <td>{{$app_config->meta_name}}</td>
                    <td>{{$app_config->meta_value}}</td>
                    <td>{{$app_config->meta_description}}</td>
                    <td>{{$app_config->meta_info}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('app_configs.show', $app_config->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('app_configs.edit', $app_config->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('app_configs.destroy', $app_config->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $app_configs->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection