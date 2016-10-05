<div class="form-group @if($errors->has('entity')) has-error @endif">
  {!! Form::label('entity', 'Entity') !!}
  {!! Form::text('entity',
                 isset($currency) ? $currency->entity : old("entity"),
                 ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("entity"))
    <span class="help-block">{{ $errors->first("entity") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('currency')) has-error @endif">
  {!! Form::label('currency', 'Currency') !!}
  {!! Form::text('currency',
                 isset($currency) ? $currency->currency : old("currency"),
                 ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("currency"))
    <span class="help-block">{{ $errors->first("currency") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('code')) has-error @endif">
  {!! Form::label('code', 'Code') !!}
  {!! Form::text('code',
                 isset($currency) ? $currency->code : old("code"),
                 ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("code"))
    <span class="help-block">{{ $errors->first("code") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('status')) has-error @endif">
  {!! Form::label('status', 'Status') !!}
  {!! Form::select('status', 
                   ['ACT' => 'Active', 'INA' => 'Inactive', 'SUS' => 'Suspend'], 
                   isset($currency) ? $currency->status : old("status"), 
                   ['class'=>'form-control','placeholder'=>'Select...']) !!}
  @if($errors->has("status"))
    <span class="help-block">{{ $errors->first("status") }}</span>
  @endif
</div>