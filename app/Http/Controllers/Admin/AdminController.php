<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminFormRequest;
use App\Models\User;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admins.index');
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    // public function store(AdminFormRequest $request)
    // {
    //     $validateData = $request->validated();

    //     $admin = User::findOrFail($validateData['admin_id']);
    //     $admin->create([
    //         'admin_id' => $validateData['admin_id'],
    //         'name' => $validateData['name'],
    //         'email' => $validateData['email'],
    //         'password' => bcrypt($validateData['password']),
    //     ]);

    //     return redirect('/admin/admin')->with('message', 'Admin Added successfully!');

    // }

    // public function edit(int $admin_id)
    // {
    //     $admin = User::findOrFail($admin_id);
    //     return view('admin.admin.edit', compact('admin'));
    // }
    // public function update(AdminFormRequest $request, int $admin_id)
    // {
    //     $validateData = $request->validated();
    //     $admin = User::findOrFail($validateData['admin_id'])
    //                     ->where('id', $admin_id)->first();
    //     if($admin)
    //     {
    //         $admin->update([
    //             'admin_id' => $validateData['admin_id'],
    //             'name' => $validateData['name'],
    //             'email' => $validateData['email'],
    //             'password' => bcrypt($validateData['password']),
    //         ]);
    
    //         return redirect('/admin/admin')->with('message', 'Admin Updated successfully!');
    //     }
    //     else
    //     {
    //         return redirect('admin/admin')->with('message', 'No Such Admin Id Found');
    //     }
    // }
    
    // public function destroy(int $admin_id)
    // {
    //     $admin = User::findOrFail($admin_id);

    //     $admin->delete();
    //     return redirect()->back()->with('message', 'Admin Deleted successfully!');
    // }

}
