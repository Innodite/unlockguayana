@extends('layouts.app')

@section('css')
  <style>
    .user{
      margin-top: 60px;
    }
  </style>
@endsection

@section('header')
  
  <div class="page-header clearfix">
    <h1>
      <i class="glyphicon glyphicon-align-justify"></i> Roles
      <a class="btn btn-success pull-right" href="{{ route('roles.create') }}">
      <i class="glyphicon glyphicon-plus"></i> Create</a>
    </h1>
  </div>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if($roles->count())
        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>DISPLAY NAME</th>
              <th>DESCRIPTION</th>
              <th>PERMISSIONS</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>

          <tbody>
          @foreach($roles as $rol)
            <tr>
              <td>{{$rol->id}}</td>
              <td>{{$rol->name}}</td>
              <td>{{$rol->display_name}}</td>
              <td>{{$rol->description}}</td>
              <td>
                <a data-toggle="modal" rol_id="{{ $rol->id }}" data-target="#permisos" class="btn btn-primary get-permisos">Permisos</a>
              </td>
              <td class="text-right">
                <a class="btn btn-xs btn-warning" href="{{ route('roles.edit', $rol->id) }}">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <form action="{{ route('roles.destroy', $rol->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-xs btn-danger">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      {!! $roles->render() !!}
      @else
        <h3 class="text-center alert alert-info">Empty!</h3>
      @endif

    </div>
  </div>
  <!-- :::::::::::::::::::::::: -->
  <div class="modal" id="permisos">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title">Gestionar permisos</h4>
        </div>
        <div class="modal-body">
          <select id="select-permisos" multiple="multiple">
            @if(isset($permissions))
              @foreach($permissions as $permission)
                <option value="{{ $permission->id }}">{{ $permission->display_name }}</option>
              @endforeach
            @endif
          </select>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).on('ready', function(){
                
      rol_id = null;
      $('#select-permisos').multiSelect({
            selectableHeader: "<div class='custom-header'>Permisos no asignados</div>",
            selectionHeader: "<div class='custom-header'>Permisos asignados</div>",
            afterSelect:function(value){//enviamos al servidor el id del permiso seleccionado
                $.ajax({
                url : '{{ URL::to("/permisos/asignar") }}',
                type : 'GET',
                dataType: 'json',
                data : {permission_id: value[0], role_id: rol_id}
            });
            },
            afterDeselect:function(value){//enviamos al servidor el id del permiso seleccionado
                $.ajax({
                url : '{{ URL::to("/permisos/desasignar") }}',
                type : 'GET',
                dataType: 'json',
                data : {permission_id: value[0], role_id: rol_id}
            });
            }
      });
                
                
      $('.get-permisos').on('click', function(){
          rol_id = $(this).attr('rol_id');

          $.ajax({
              url : '{{ URL::to("/permisos") }}',
              type : 'GET',
              dataType: 'json',
              data : {id: rol_id}
          }).done(function(data){
              $.each(data.permissionsAssigned ,function(index, value){
                  $('#select-permisos option[value="'+value.id+'"]').attr('selected', true);
              });
              $('#select-permisos').multiSelect('refresh');
          });
      });
    });
  </script>
@endsection