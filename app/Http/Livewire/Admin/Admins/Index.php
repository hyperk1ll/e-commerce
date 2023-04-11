<?php

namespace App\Http\Livewire\Admin\Admins;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public $name, $email, $password, $admin_id, $role_as;

    

    public function deleteAdmin($admin_id)
    {
        $admin = User::findOrFail($admin_id);
        $admin->delete();
        session()->flash('message', 'Admin Deleted successfully!');
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

    public function editAdmin(int $admin_id)
    {
        $this->admin_id = $admin_id;
        $admin = User::findOrFail($admin_id);
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
