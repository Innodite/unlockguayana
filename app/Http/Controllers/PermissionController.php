<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\Permission;
use App\PermissionRole;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class PermissionController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  protected $permissions;
    
  public function  __construct() {
    $this->permissions = Permission::all();
  }
    
  public function index(Request $request)
  {
    return response()->json($this->getPermissions($request->input("id")));
  }
    
  public function assign(Request $request){
    $rol = Role::find($request->input("role_id"));
    $rol->attachPermission($request->input("permission_id"));
    return response()->json('ok'); //Response::json('ok')
  }
    
  public function unassign(Request $request){
    $rol = Role::find($request->input("role_id"));
    $rolPermisos = PermissionRole::where('role_id', '=', $request->input("role_id"))
                                  ->where('permission_id', '=', $request->input("permission_id"))
                                  ->get()
                                  ->first();

    $unassign = PermissionRole::where('role_id', '=', $request->input("role_id"))
                              ->where('permission_id', '=', $request->input("permission_id"))
                              ->delete();

    return response()->json('ok');
  }

  private function getPermissions($id_rol){
    $permissions = array();

    $permissions['permissionsAssigned'] = $this->getPermissionsAssigned($id_rol);
    return $permissions;
  }
    
  private function getPermissionsAssigned($id_rol){
    $permissionsDeRol = PermissionRole::where('role_id', '=', $id_rol)->get();
    $asignados = array();

    foreach($permissionsDeRol as $p){
      foreach ($this->permissions as $key => $value){
        if($value->id == $p->permission_id){
          $asignados[] = $value;
        }
      }
    }
        
    return $asignados;
  }

}
