<div class="form-group @if($errors->has('meta_name')) has-error @endif">
  {!! Form::label('meta_name', 'Meta Name') !!}
  {!! Form::text('meta_name',
                   isset($app_config) ? $app_config->meta_name : old("meta_name"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("meta_name"))
    <span class="help-block">{{ $errors->first("meta_name") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('meta_value')) has-error @endif">
  {!! Form::label('meta_value', 'Meta Value') !!}
  
  @if (isset($app_config))
    @if ($app_config->meta_name == "default_language")
      {!! Form::select('meta_value', 
                       Config::get('languages'), 
                       isset($app_config) ? $app_config->meta_value : 'es', 
                       ['class'=>'form-control']) !!}
    @elseif ($app_config->meta_name == "default_currency")
      {!! Form::select('meta_value', 
                       \App\Libs\Utils::publicComboBoxCurrencies(), 
                       isset($app_config) ? $app_config->meta_value : '255', 
                       ['class'=>'form-control']) !!}
    @else
      {!! Form::text('meta_value',
                   isset($app_config) ? $app_config->meta_value : old("meta_value"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @endif
  @else
    {!! Form::text('meta_value',
                   isset($app_config) ? $app_config->meta_value : old("meta_value"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
  @endif

  @if($errors->has("meta_value"))
    <span class="help-block">{{ $errors->first("meta_value") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('meta_description')) has-error @endif">
  {!! Form::label('meta_description', 'Meta Description') !!}
  {!! Form::text('meta_description',
                   isset($app_config) ? $app_config->meta_description : old("meta_description"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("meta_description"))
    <span class="help-block">{{ $errors->first("meta_description") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('meta_info')) has-error @endif">
  {!! Form::label('meta_info', 'Meta Info') !!}
  {!! Form::text('meta_info',
                   isset($app_config) ? $app_config->meta_info : old("meta_info"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("meta_info"))
    <span class="help-block">{{ $errors->first("meta_info") }}</span>
  @endif
</div>