<div class="container">
  <div class="col-md-3 form-group @if($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name',
                   isset($user) ? $user->name : old("name"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("name"))
      <span class="help-block">{{ $errors->first("name") }}</span>
    @endif
  </div>

  <div class="col-md-3 form-group @if($errors->has('email')) has-error @endif">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email',
                   isset($user) ? $user->email : old("email"),
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("email"))
      <span class="help-block">{{ $errors->first("email") }}</span>
    @endif
  </div>

  <div class="col-md-3 form-group @if($errors->has('currency_id')) has-error @endif">
    {!! Form::label('currency_id', 'Currency') !!}
    {!! Form::select('currency_id', 
                   $currencies, 
                   isset($user) ? $user->currency_id : null, 
                   ['placeholder' => 'Select...','class'=>'form-control']) !!}
    @if($errors->has("currency_id"))
      <span class="help-block">{{ $errors->first("currency_id") }}</span>
    @endif
  </div>

  <div class="col-md-3 form-group">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', 
                      $roles, 
                      (isset($user) && $user->roles()->count() > 0) ? $user->roles()->first()->id : null, 
                      ['placeholder' => 'Select...','class'=>'form-control']) !!}
  </div>
  
</div>

<div class="container">
  <div class="col-md-3 form-group @if($errors->has('balance_available')) has-error @endif">
    {!! Form::label('balance_available', 'Available') !!}
    {!! Form::number('balance_available',
                   isset($user) ? $user->balance_available : 0,
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("balance_available"))
      <span class="help-block">{{ $errors->first("balance_available") }}</span>
    @endif
  </div>

  <div class="col-md-3 form-group @if($errors->has('amount_blocked')) has-error @endif">
    {!! Form::label('amount_blocked', 'Blocked') !!}
    {!! Form::number('amount_blocked',
                   isset($user) ? $user->amount_blocked : 0,
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("amount_blocked"))
      <span class="help-block">{{ $errors->first("amount_blocked") }}</span>
    @endif
  </div>

  <div class="col-md-2 form-group @if($errors->has('special_percentage')) has-error @endif">
    {!! Form::label('special_percentage', '% Special') !!}
    {!! Form::number('special_percentage',
                   isset($user) ? $user->special_percentage : 0,
                   ['class'=>'form-control','placeholder'=>'']) !!}
    @if($errors->has("special_percentage"))
      <span class="help-block">{{ $errors->first("special_percentage") }}</span>
    @endif
  </div>

  <div class="col-md-2 form-group @if($errors->has('lang')) has-error @endif">
    {!! Form::label('lang', 'Language') !!}
    {!! Form::select('lang', 
                      Config::get('languages'), 
                      isset($user) ? $user->lang : 'es', 
                      ['placeholder' => 'Select...','class'=>'form-control']) !!}
    @if($errors->has("lang"))
      <span class="help-block">{{ $errors->first("lang") }}</span>
    @endif
  </div>  

  <div class="col-md-2 form-group @if($errors->has('status')) has-error @endif">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', 
                      ['ACT' => 'Active', 'INA' => 'Inactive', 'SUS' => 'Suspend'], 
                      isset($user) ? $user->status : 'ACT', 
                      ['placeholder' => 'Select...','class'=>'form-control']) !!}
    @if($errors->has("status"))
      <span class="help-block">{{ $errors->first("status") }}</span>
    @endif
  </div>

  
</div>