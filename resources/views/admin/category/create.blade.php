@extends('layouts.admin')

@section('content')

    
<div class="content-header">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h4>Category
                                <a href="{{ url('admin/category') }}" class="btn btn-primary float-end">Back</a>
                            </h4>
                        </div> --}}
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
            
                            <div class="card-tools">
                                <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{  url('admin/category') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control border-foo">  
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control border-foo">
                                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    {{-- Description --}}
                                    <div class="col-md-12 mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control border-foo" rows="3"></textarea>
                                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    {{-- Image --}}
                                    <div class="col-md-6 mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control border-foo">
                                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    {{-- Status --}}
                                    <div class="col-md-6 mb-3">
                                        <label>Hide</label><br/>
                                        <input type="checkbox" name="status">
                        
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

{{-- <div class="content-header">
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
                                   <a href="#" wire:click="deleteCategory({{ $category->id }})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
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
   </div> --}}