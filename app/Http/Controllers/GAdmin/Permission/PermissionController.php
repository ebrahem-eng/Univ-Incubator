<?php

namespace App\Http\Controllers\GAdmin\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    
        //عرض صفحة الصلاحيات

        public function index()
        {
          $permissions = Permission::all();
          return view('GlobalAdmin/Permission/index', compact('permissions'));
         
        }
    
        //عرض صفحة الادوار الموجودة هذه الصلاحية فيها
    
        public function go_to_give_permissions(Permission $permission)
        {
 
                    $permission_guard = $permission->guard_name;
                    $roles = Role::where('guard_name', $permission_guard)->get();
    
                    return view('GlobalAdmin.permission.GiveRole', compact('permission', 'roles'));
           
        }
    
        //اضافة الصلاحية الى دور معين 
    
        public function giverole(Request $request, Permission $permission)
        {
           
    
                    if ($permission->hasRole($request->role)) {
                        return back()->with('error_message', 'Role Is Already Assigned');
                    }
                    $permission->assignRole($request->role);
                    return back()->with('success_message', 'Role Assign Successful');
            
        }
    
        //سحب صلاحية من دور معين 
    
        public function removepermission(Permission $permission, Role $role)
        {
           
                    if ($permission->hasRole($role)) {
                        $permission->removeRole($role);
                        return back()->with('success_message', 'Role Removed Successfully!');
                    }
                        return back()->with('error_message', 'Role Not Found');
                }

}
