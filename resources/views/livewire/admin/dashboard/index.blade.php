{{-- <!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}



<!-- Template Main CSS File -->

{{-- <style>
.sales-card {
  margin-bottom: 10px; /* Adjust the value as per your desired spacing */
}
/* Container for the three boxes */
.container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Individual boxes for product, category, and brand counts */
        .box {
          text-align: center;
            padding: 20px;
            background-color: #478ac9;
            color: #fff;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
            width: 400px; /* Adjust the width as needed */
            margin: 10px;
        }

</style> --}}

{{-- <div class="row">
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
              <div class="container">
                <div class="box">
                    <h1>{{$this->count_products}}</h1>
                    <h4>Total Product</h4>
                </div>
                <div class="box">
                    <h1>{{$this->count_category}}</h1>
                    <h4>Total Category</h4>
                </div>
                <div class="box">
                    <h1>{{$this->count_brand}}</h1>
                    <h4>Total Brand</h4>
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
  </div> --}}


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$this->count_products}}</h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-cube"></i>
              </div>
              <div class="small-box-footer">&nbsp;</div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$this->count_category}}</h3>

                <p>Total Categories</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <div class="small-box-footer">&nbsp;</div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$this->count_brand}}</h3>

                <p>Total Brands</p>
              </div>
              <div class="icon">
                <i class="ion ion-pricetag"></i>
              </div>
              <div class="small-box-footer">&nbsp;</div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Out-of-Stock Products</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
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
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
