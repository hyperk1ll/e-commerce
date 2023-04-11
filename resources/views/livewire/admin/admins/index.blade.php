<div>
    @include('livewire.admin.admins.modal-form')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Admin List
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAdminModal" class="btn btn-primary btn-sm float-end">Add Admin</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->role_as == '1' ? 'Admin':'User' }}</td>

                                <td>
                                    <a href="#" wire:click="editAdmin({{ $admin->id }})" data-bs-toggle="modal" data-bs-target="#updateAdminModal" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" wire:click="deleteAdmin({{ $admin->id }})" data-bs-toggle="modal" data-bs-target="#deleteAdminModal" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No Admin Found</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#addAdminModal').modal('hide');
        $('#updateAdminModal').modal('hide');
        $('#deleteAdminModal').modal('hide');
    });

</script>

@endpush