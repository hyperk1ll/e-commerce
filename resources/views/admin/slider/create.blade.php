@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Add Slider
                    <a href="{{ url('admin/sliders/') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                {{-- @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ url('admin/sliders/create') }}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Slider</label>
                            </div>
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div><label>Status</label></div>
                                    <input type="checkbox" name="status" style="width: 50px; height: 50px;">
                                    <div>Checked=Hidden, UnChecked</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                        
                </form>
            </div>
        </div>
    </div>
</div>


@endsection