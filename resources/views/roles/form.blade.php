<div class="form-group @if($errors->has('name')) has-error @endif">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name',
                  isset($role) ? $role->name : old("name"),
                  ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("name"))
    <span class="help-block">{{ $errors->first("name") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('display_name')) has-error @endif">
  {!! Form::label('display_name', 'Display Name') !!}
  {!! Form::text('display_name',
                  isset($role) ? $role->display_name : old("display_name"),
                  ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("display_name"))
    <span class="help-block">{{ $errors->first("display_name") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('description')) has-error @endif">
  {!! Form::label('description', 'Description') !!}
  {!! Form::text('description',
                  isset($role) ? $role->description : old("description"),
                  ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("description"))
    <span class="help-block">{{ $errors->first("description") }}</span>
  @endif
</div>