<div class="form-group @if($errors->has('currency_id')) has-error @endif">
  {!! Form::label('currency_id', 'Currency Id') !!}
  {!! Form::select('currency_id', 
                   $currencies, 
                   isset($exchanges_rate) ? $exchanges_rate->currency_id : null, 
                   ['placeholder' => 'Select...','class'=>'form-control']) !!}
  @if($errors->has("currency_id"))
    <span class="help-block">{{ $errors->first("currency_id") }}</span>
  @endif
</div>

<div class="form-group @if($errors->has('rate')) has-error @endif">
  {!! Form::label('rate', 'Rate') !!}
  {!! Form::text('rate',
                 isset($exchanges_rate) ? $exchanges_rate->rate : old("rate"),
                 ['class'=>'form-control','placeholder'=>'']) !!}
  @if($errors->has("rate"))
    <span class="help-block">{{ $errors->first("rate") }}</span>
  @endif
</div>