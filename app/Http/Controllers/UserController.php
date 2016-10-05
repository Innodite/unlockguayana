<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Role;
use App\RoleUser;
use App\Libs\Utils;
use Illuminate\Http\Request;

class UserController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = User::orderBy('id', 'desc')->paginate(10);

    return view('users.index', compact('users'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $currencies = Utils::getComboBoxCurrencies();
    $roles      = Utils::getComboBoxRoles();

    return view('users.create', compact('currencies', 'roles'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $user = User::findOrFail($id);

    return view('users.show', compact('user'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    $user = new User();

    $user->name               = $request->input("name");
    $user->email              = $request->input("email");
    $user->currency_id        = $request->input("currency_id");
    $user->lang               = $request->input("lang");
    $user->balance_available  = $request->input("balance_available");
    $user->amount_blocked     = $request->input("amount_blocked");
    $user->special_percentage = $request->input("special_percentage");
    $user->status             = $request->input("status");
    $user->password           = bcrypt(str_random(10));

    $user->save();

    $role = $this->set_role($request->input("role"), $user->id);
    if (! empty($role)) {
      $user->attachRole( $role );
    }

    return redirect()->route('users.index')->with('message', 'Item created successfully.');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $user       = User::findOrFail($id);
    $roles      = Utils::getComboBoxRoles();
    $currencies = Utils::getComboBoxCurrencies();

    return view('users.edit', compact('user', 'currencies', 'roles'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @param Request $request
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $user = User::findOrFail($id);

    $user->name               = $request->input("name");
    $user->email              = $request->input("email");
    $user->currency_id        = $request->input("currency_id");
    $user->lang               = $request->input("lang");
    $user->balance_available  = $request->input("balance_available");
    $user->amount_blocked     = $request->input("amount_blocked");
    $user->special_percentage = $request->input("special_percentage");
    $user->status             = $request->input("status");
    
    $role = $this->set_role($request->input("role"), $user->id);
    if (! empty($role)) {
      $user->attachRole( $role );
    }

    $user->save();

    return redirect()->route('users.index')->with('message', 'Item updated successfully.');
  }

  private function set_role($role_id, $user_id)
  {
    if (! empty($role_id))
    {
      $role = Role::find($role_id);
      if (! is_null($role))
      {
        // Clear all roles asigne for user
        RoleUser::where("user_id", "=", $user_id)->delete();
        return $role;
      }
    }
    return null;
  }

}