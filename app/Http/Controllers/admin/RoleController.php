<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function index() {
		$model = Role::whereNotIn('name', ['Super Admin'])->get();
		return view('admin.acl.index',compact('model'));
	}

	public function create(Request $request) {
		
		if ($request->isMethod('get')) {
			$permissions = Permission::all();
			return view('admin.acl.create', compact('permissions'));
		} else {

			$validator = $this->validate($request, [
				'name' => 'required|unique:roles,name|max:255',
			]);

			$role = Role::create(['name' => $request->name, 'guard_name' => 'web']);

			$role->givePermissionTo($request->permissions);

			return response()->json(['success' => true, 'status' => 'success', 'message' => _lang('Role And Permission Setup'), 'goto' => route('admin.user.role')]);
		}
	}

	public function edit($id) {
		if (!auth()->user()->can('role.update')) {
			abort(403, 'Unauthorized action.');
		}

		if ($id == 1) {
			return abort(404);
		}
		$role = Role::with(['permissions'])->find($id);
		$role_permissions = [];
		foreach ($role->permissions as $role_perm) {
			$role_permissions[] = $role_perm->name;
		}

		$role = Role::where('id', $id)->firstOrFail();

		$permissions = Permission::all();
		return view('admin.acl.edit', compact(['role', 'permissions', 'role_permissions']));
	}

	public function update(Request $request) {
		if (!auth()->user()->can('role.update')) {
			abort(403, 'Unauthorized action.');
		}
		$role = Role::where('id', $request->id)->firstOrFail();
		$validator = $request->validate([
			'name' => ['required', 'max:255',Rule::unique('roles')->ignore($role->id),],
		]);

		$role->name = $request->name;
		$role->save();

		$role->syncPermissions($request->permissions);
		return response()->json(['success' => true, 'status' => 'success', 'message' => _lang('Role And Permission Updated'), 'goto' => route('admin.user.role')]);
	}
	public function distroy(Request $request, $id) {
		if (!auth()->user()->can('role.delete')) {
			abort(403, 'Unauthorized action.');
		}
		$role = Role::where('id', $id)->firstOrFail();
		$role->delete();
		return response()->json(['success' => true, 'status' => 'success', 'message' => _lang('Role And Permission Delete')]);
		
	}
}
