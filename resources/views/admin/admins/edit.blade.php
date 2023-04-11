@extends('layouts.admin')

@section('content')

<style>
    select.form-control.border-foo:not([size]):not([multiple]) {
      height: auto;
    }
    .border-foo {
      border-style: solid;
      border-width: 1px;
      border-color: rgb(207, 207, 207);
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Admin
                    <a href="{{url('admin/admin')}}" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/admin/'.$admin->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row"> 
                    
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control border-foo">  
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control border-foo">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        {{-- Password --}}
                        <div class="col-md-12 mb-3">
                            <label>Password</label>
                            <textarea name="password" class="form-control border-foo" rows="3"></textarea>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection