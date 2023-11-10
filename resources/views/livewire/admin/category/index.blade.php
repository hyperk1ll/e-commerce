<div>
    @include('livewire.admin.category.modal-form')

    <div class="content-header">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>

                    <div class="card-tools">
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm">Add Category</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID</th>
                                <th> Name </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="#" wire:click="deleteCategory({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$categories->links()}}
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteCategoryModal').modal('hide');
    });

</script>

@endpush