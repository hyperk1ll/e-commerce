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
                <h4>Category
                    <a href="{{ url('admin/category') }}" class="btn btn-primary float-end">Back</a>
                </h4>
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
                            <label>Status</label><br/>
                            <input type="checkbox" name="status">
            
                        </div>
                        {{-- SEO Tags --}}
                        <div class="col-md-12 mb-3">
                            <h4>SEO Tags</h4>
                        </div>

                        {{-- Meta Title --}}
                        <div class="col-md-6 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control border-foo">
                            @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        {{-- Meta Keyword --}}
                        <div class="col-md-6 mb-3">
                            <label>Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control border-foo" rows="3"></textarea>
                            @error('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        {{-- Meta Description --}}
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control border-foo" rows="3"></textarea>
                            @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
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

@endsection