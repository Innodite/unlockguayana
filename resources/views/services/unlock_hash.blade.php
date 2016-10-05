@extends('layouts.app')
<style type="text/css">
  .run-info {
    cursor: pointer;
  }
</style>
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Desbloqueo por Hash</div>
        <div class="panel-body">
          @if($api_action["success"])
            @foreach ($api_action["data"]["SUCCESS"][0]["LIST"] as $key => $item)
              <h4>{{ $item["GROUPNAME"] }}</h4>
              <table class="table table-condensed table-striped">
                <thead>
                  <tr>
                    <th>Servicio</th>
                    <th>Créditos</th>
                    <th>Tiempo</th>
                    <th style="display:none">Info</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($item["SERVICES"] as $skey => $service)
                    <tr data-id="{{ $service['SERVICEID'] }}" 
                        data-info="{{ $service['INFO'] }}"
                        data-ext="{{ $service['ALLOW_EXTENSION'] }}"
                        >
                      <td class="run-info">{{ $service["SERVICENAME"] }}</td>
                      <td>{{ $service["CREDIT"] }}</td>
                      <td>{{ $service["TIME"] }}</td>
                      <td style="display:none">{{ print($service["INFO"]) }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endforeach
            <div id="file_service_info"></div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">

    $(document).ready(function(){

      $(".run-info").click(function(){
        var id    = $(this).parents('tr').data('id');
        var info  = $(this).parents('tr').data('info');
        $("#file_service_info").html(info);
      });

    });
  </script>
@endsection