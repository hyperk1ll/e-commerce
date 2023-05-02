{{-- Add Admin Modal --}}
<div wire:ignore.self class="modal fade" id="addAdminModal" aria-labelledby="exampleModalLabel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admins</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
            </div>


            <form wire:submit.prevent="storeAdmin">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Admin Name</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Admin Email</label>
                        <input type="text" wire:model.defer="email" class="form-control">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Admin Password</label>
                        <input type="text" wire:model.defer="password" class="form-control">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Role</label>
                        <select wire:model="role_as" class="form-control">
                            <option value="">Select Role</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        @error('role_as') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    
            
        </div>
    </div>
</div>

{{-- Admin Update Modal --}}
<div wire:ignore.self class="modal fade" id="updateAdminModal" aria-labelledby="exampleModalLabel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Admins</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>Loading...
            </div>
            <div wire:loading.remove>

                <form wire:submit.prevent="updateAdmin">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Admin Name</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Admin Email</label>
                            <input type="text" wire:model.defer="email" class="form-control">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Admin Password</label>
                            <input type="text" wire:model.defer="password" class="form-control">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Role</label>
                            <select wire:model.defer="role_as" class="form-control" >
                                {{-- make default value is selected if admin then else is user --}}
                                <option value="1" {{ $role_as == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ $role_as == 2 ? 'selected' : '' }}>User</option>

                            </select>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


{{-- Admin Delete Modal --}}
<div wire:ignore.self class="modal fade" id="deleteAdminModal" aria-labelledby="exampleModalLabel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Admins</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>Loading...
            </div>
            <div wire:loading.remove>

                <form wire:submit.prevent="destroyAdmin">
                    <div class="modal-body">
                        <h4>Are you sure you want to delete this admin?</h4>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes. Delete</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>