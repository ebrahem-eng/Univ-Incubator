<?php

namespace App\Http\Controllers\GAdmin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    //عرض صفحة الادوار 

    public function index()
    {
        $roles = Role::all();
        return view('GlobalAdmin/Role/index', compact('roles'));
    }

    //عرض صفحة اسناد الصلاحيات الى دور معين 

    public function go_to_give_permissions(Role $role)
    {
        $role_guard = $role->guard_name;
        $permissions = Permission::where('guard_name', $role_guard)->get();
        return view('GlobalAdmin/Role/GivePermission', compact('role', 'permissions'));
    }

    //اسناد صلاحيات الى دور معين

    public function givepermission(Request $request, Role $role)
    {
       
                if ($role->hasPermissionTo($request->permission)) {
                    return back()->with('message_err', 'Permission Is Already Assign');
                }
                $role->givePermissionTo($request->permission);
                return back()->with('message_success', 'permission assign successful');
           
    }

    //سحب صلاحية من دور معين 

    public function revokepermission(Role $role, Permission $permission)
    {
                if ($role->hasPermissionTo($permission)) {
                    $role->revokePermissionTo($permission);
                    return back()->with('message_success', 'Permission Revok Success');
                }

                return back()->with('message_error', 'Permission Not Found');
      
    }
}
