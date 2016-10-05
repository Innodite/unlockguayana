<div class="container">
  <div class="col-md-4 form-group @if($errors->has('api_name')) has-error @endif">
    {!! Form::label('api_name', 'Name') !!}
    {!! Form::text('api_name',
                    isset($apis_config) ? $apis_config->api_name : old("api_name"),
                    ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_name"))
      <span class="help-block">{{ $errors->first("api_name") }}</span>
    @endif
  </div>

  <div class="col-md-4 form-group @if($errors->has('api_url_base')) has-error @endif">
    {!! Form::label('api_url_base', 'Url Base') !!}
    {!! Form::text('api_url_base',
                   isset($apis_config) ? $apis_config->api_url_base : old("api_url_base"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_url_base"))
      <span class="help-block">{{ $errors->first("api_url_base") }}</span>
    @endif
  </div>

  <div class="col-md-2 form-group @if($errors->has('api_type')) has-error @endif">
    {!! Form::label('api_type', 'Type') !!}
    {!! Form::select('api_type', 
                      ['DHRU' => 'DHRU'], 
                      isset($apis_config) ? $apis_config->api_type : null, 
                      ['placeholder' => 'Select...','class'=>'form-control']) !!}
    @if($errors->has("api_type"))
      <span class="help-block">{{ $errors->first("api_type") }}</span>
    @endif
  </div>   

  <div class="col-md-2 form-group @if($errors->has('api_request_format')) has-error @endif">
    {!! Form::label('api_request_format', 'Request Format') !!}
    {!! Form::text('api_request_format',
                   isset($apis_config) ? $apis_config->api_request_format : old("api_request_format"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_request_format"))
      <span class="help-block">{{ $errors->first("api_request_format") }}</span>
    @endif
  </div> 
</div>

<div class="container">

  <div class="col-md-4 form-group @if($errors->has('api_user_name')) has-error @endif">
    {!! Form::label('api_user_name', 'API User Name') !!}
    {!! Form::text('api_user_name',
                   isset($apis_config) ? $apis_config->api_user_name : old("api_user_name"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_user_name"))
      <span class="help-block">{{ $errors->first("api_user_name") }}</span>
    @endif
  </div>

  <div class="col-md-4 form-group @if($errors->has('api_key')) has-error @endif">
    {!! Form::label('api_key', 'API Key') !!}
    {!! Form::text('api_key',
                   isset($apis_config) ? $apis_config->api_key : old("api_key"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_key"))
      <span class="help-block">{{ $errors->first("api_key") }}</span>
    @endif
  </div> 

  <div class="col-md-4 form-group @if($errors->has('api_secret')) has-error @endif">
    {!! Form::label('api_secret', 'Secrect Key') !!}
    {!! Form::text('api_secret',
                   isset($apis_config) ? $apis_config->api_secret : old("api_secret"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_secret"))
      <span class="help-block">{{ $errors->first("api_secret") }}</span>
    @endif
  </div>
</div>

<div class="container">

  <div class="col-md-4 form-group @if($errors->has('api_cli_increased_percentage')) has-error @endif">
    {!! Form::label('api_cli_increased_percentage', '% Fees for Clients') !!}
    {!! Form::text('api_cli_increased_percentage',
                    isset($apis_config) ? $apis_config->api_cli_increased_percentage : old("api_cli_increased_percentage"),
                    ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_cli_increased_percentage"))
      <span class="help-block">{{ $errors->first("api_cli_increased_percentage") }}</span>
    @endif
  </div> 

  <div class="col-md-4 form-group @if($errors->has('api_dev_increased_percentage')) has-error @endif">
    {!! Form::label('api_dev_increased_percentage', '% Fees for Developers') !!}
    {!! Form::text('api_dev_increased_percentage',
                   isset($apis_config) ? $apis_config->api_dev_increased_percentage : old("api_dev_increased_percentage"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("api_dev_increased_percentage"))
    <span class="help-block">{{ $errors->first("api_dev_increased_percentage") }}</span>
    @endif
  </div>

  <div class="col-md-4 form-group @if($errors->has('api_status')) has-error @endif">
    {!! Form::label('api_status', 'Api Status') !!}
    {!! Form::select('api_status', 
                      ['ACT' => 'Active', 'INA' => 'Inactive', 'SUS' => 'Suspend'], 
                      isset($apis_config) ? $apis_config->api_status : null, 
                      ['placeholder' => 'Select...','class'=>'form-control']) !!}
    @if($errors->has("api_status"))
      <span class="help-block">{{ $errors->first("api_status") }}</span>
    @endif
  </div> 
</div>
