<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$role = Role::create(['name' => 'writer']);
        //$permission = Permission::create(['name' => 'edit articles']);
        //$permission = Permission::create(['name' => 'write articles']);
        //$role = Role::findById(1);
        //$permission = Permission::findById(1);
        //$role->givePermissionTo($permission);
        //$permission->removeRole($role);
        //$role->revokePermissionTo($permission);
        return view('home');
    }

    public function test()
    {
        //$role = Role::create(['name' => 'operator']);
        //$permission = Permission::create(['name' => 'data entry']);
        //auth()->user()->assignRole('operator');
        //auth()->user()->givePermissionTo('data entry');
        //$role = Role::findById(2);
        //$permission = Permission::findById(3);
        //$role->givePermissionTo($permission);
        //return auth()->user()->permissions;
        //return auth()->user()->getDirectPermissions();
        //return auth()->user()->getAllPermissions();
        //return User::role('operator')->get();
        //return User::permission('data entry')->get();
        //auth()->user()->revokePermissionTo('data entry');
        //auth()->user()->removeRole('operator');
    }
}
