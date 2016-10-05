@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>Orders / Show #{{$user->id}}</h1>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('users.edit', $user->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="name">Name</label>
                     <p class="form-control-static">{{$user->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">Email</label>
                     <p class="form-control-static">{{$user->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="currency_id">Currency</label>
                     <p class="form-control-static">{{$user->currency_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="lang">Language</label>
                     <p class="form-control-static">{{$user->lang}}</p>
                </div>
                    <div class="form-group">
                     <label for="balance_available">Balance Available</label>
                     <p class="form-control-static">{{$user->balance_available}}</p>
                </div>
                    <div class="form-group">
                     <label for="amount_blocked">Amount Blocked</label>
                     <p class="form-control-static">{{$user->amount_blocked}}</p>
                </div>
                    <div class="form-group">
                     <label for="special_percentage">Special Percentage</label>
                     <p class="form-control-static">{{$user->special_percentage}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">Status</label>
                     <p class="form-control-static">{{$user->status}}</p>
                </div>
                </div>
                    <div class="form-group">
                     <label for="roles">Role</label>
                     <ul>
                        @foreach($user->roles as $rol)
                          <li>{{ $rol->display_name }}</li>
                          <ul>
                            @foreach($rol->permissions as $permission)
                            <li>{{ $permission->display_name }}</li>
                            @endforeach
                          </ul>
                        @endforeach
                     </ul>
                     <p class="form-control-static"></p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('users.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection