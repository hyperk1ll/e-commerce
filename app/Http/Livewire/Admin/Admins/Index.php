<?php

namespace App\Http\Livewire\Admin\Admins;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{
    public $name, $email, $password, $admin_id, $role_as;

    

    public function deleteAdmin($admin_id)
    {
        $this->admin_id = $admin_id;
    }

    public function destroyAdmin()
    {
        User::findOrFail($this->admin_id)->delete();
        session()->flash('message', 'Admin Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }


    public function storeAdmin()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role_as' => 'required',
        ]);


        User::updateOrCreate(['id' => $this->admin_id], [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_as' => $this->role_as,

        ]);

        session()->flash('message', $this->admin_id ? 'Admin Updated successfully!' : 'Admin Added successfully!');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->admin_id = null;
        $this->role_as = null;
    }

    public function editAdmin($admin_id)
    {
        $admin = User::findOrFail($admin_id);
        $this->admin_id = $admin_id;
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->password = $admin->password;
        $this->role_as = $admin->role_as;
    }


    public function render()
    {
        return view('livewire.admin.admins.index', [
            'admins' => User::all(),
        ] );
    }
}
