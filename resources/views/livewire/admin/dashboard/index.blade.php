<div class="row">
    <div class="col-md-6">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
              <h4>Summary
              </h4>
            </div>
            <div class="card-body">
                {{-- count Products --}}
                <div class="row">
                    <div class="col-md-6">
                        <h5>Products</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $this->count_products }}</h5>
                    </div>
                </div>
                {{-- count Categories --}}
                <div class="row">
                    <div class="col-md-6">
                        <h5>Categories</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $this->count_category }}</h5>
                    </div>
                </div>
                {{-- count Brand --}}
                <div class="row">
                    <div class="col-md-6">
                        <h5>Brand</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $this->count_brand }}</h5>
                    </div>
                </div>
                {{-- count Admin --}}
                <div class="row">
                    <div class="col-md-6">
                        <h5>Admin</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $this->count_admin }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>