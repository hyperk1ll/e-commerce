<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}

<style>
.sales-card {
  margin-bottom: 10px; /* Adjust the value as per your desired spacing */
}
</style>

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
          <div class="card-header">
              <h4>Dashboard
              </h4>
          </div>
          <div class="card-body">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Category</h5>
          
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-menu-button-wide menu-icon"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $this->count_category }}</h6>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Products</h5>
          
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text menu-icon"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $this->count_products }}</h6>
          
                    </div>
                  </div>
                </div>
          
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Brands</h5>
          
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bar-chart menu-icon"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $this->count_brand }}</h6>
          
                    </div>
                  </div>
                </div>
          
              </div>
            </div>

          </div>
      </div>
    </div>
    <div class="col-md-12">
      <style>.outstock {
        margin-top: 10px;
      }</style>
      <div>
        <div class="card outstock">
            <div class="card-header">
                <h4>Out of Stock Products</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($outOfStockProducts as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name}}</td>
                                <td>{{ $product->brand}}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                  <a href="{{ url('admin/products/'.$product->id.'/edit')}}" class="btn btn-sm btn-success">Edit</a>
                                  <a href="{{ url('admin/products/'.$product->id.'/delete')}}" onclick="return confirm ('Are you sure, you want to delete this data?')"class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Out-of-Stock Products</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
  </div>
  </div>


