<?php

namespace App\Modules\Admin\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    public function createRole(Request $request){
      if($request->has('btn-submit')){
        $role_id = $request->input('role_id');
        $permission_id = $request->input('permission_id');

        $role = Role::find($role_id);
        $permission = Permission::find($id);
        $role->attachPermission($permission);

        return redirect()->url('login');
      }
    }

    public function postAjaxRole(Request $request)
    {
      if(!$request->ajax()){
        abort(404);
      }else{
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = \LP_lib::unicodenospace($request->name);
        $role->description = $request->description;
        $role->save();
        return response()->json(['error' => false, 'rs' => $role], 200);
      }
    }

    public function postAjaxPermission(Request $request)
    {
      if(!$request->ajax()){
        abort(404);
      }else{
        $permission = new Permission;
        $permission->name = $request->name;
        $permission->display_name = \LP_lib::unicodenospace($request->name);
        $permission->description = $request->description;
        $permission->save();
        return response()->json(['error' => false, 'rs' => $permission], 200);
      }
    }
}
