@extends('layouts.admin')

@section('content')

{{-- <style>
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

    h4 {
    padding: 0;
  }
  h4 {
    margin-top: 0;
    margin-bottom: 0.5rem;
    line-height: 1.2;
    font-weight: 500;
    color: inherit;
  }


  h4 {
    font-size: 1.25rem;
  }
h4
{
font-weight: 400;
font-size: 1.5rem;
line-height: 1.2;
margin-top: 20px;
margin-bottom: 20px;
}
</style> --}}


<div class="content-header">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
            
                            <div class="card-tools">
                                <a href="{{url('admin/category')}}" class="btn btn-primary btn-sm">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row"> 
                                
                                    <div class="col-md-6 mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{$category->name}}"class="form-control border-foo"/>
                                        @error('name') <small class="text-danger">{{$message}} </small>@enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" value="{{$category->slug}}"class="form-control border-foo"/>
                                        @error('slug') <small class="text-danger">{{$message}} </small>@enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control border-foo" rows="3">{{$category->description}}</textarea>
                                        @error('description') <small class="text-danger">{{$message}} </small>@enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control border-foo"/>
                                        <img src="{{asset(''.$category->image)}}" width="60px" height="60px" />
                                        @error('image') <small class="text-danger">{{$message}} </small>@enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Hide</label><br/>
                                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked' :''}} style="width: 25px; height: 25px;">
                                        @error('status') <small class="text-danger">{{$message}} </small>@enderror
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
        </div>
    </section>
</div>
@endsection
