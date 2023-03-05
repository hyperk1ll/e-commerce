@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Slider
                    <a href="{{ url('admin/sliders/') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    @method('PUT');
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Slider</label>
                            </div>
                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$slider->title}}"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4">{{$slider->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                                <img scr={{asset("$slider->image")}} style="width:50px;height:50px" alt="Slider">
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div><label>Status</label></div>
                                    <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked' : ''}}style="width: 50px; height: 50px;">
                                    <div>Checked=Hidden, UnChecked</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                        
                </form>
            </div>
        </div>
    </div>
</div>


@endsection