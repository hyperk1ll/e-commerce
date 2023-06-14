<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
          <i class="bi bi-menu-button-wide menu-icon"></i>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">Add Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
          <i class="bi bi-journal-text menu-icon"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-products">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create') }}">Add Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/') }}">View Product</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/brands') }}">
          <i class="bi bi-bar-chart menu-icon"></i>
          <span class="menu-title">Brands</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/admins') }}">
          <i class="bi bi-person menu-icon"></i>
          <span class="menu-title">Administrator</span>
        </a>
      </li> --}}

    </ul>
  </nav>





<!-- ======= Sidebar ======= -->
{{-- <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{ url('admin/dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ url('admin/category/create') }}">
            <i class="bi bi-circle"></i><span>Add Category</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/category/') }}">
            <i class="bi bi-circle"></i><span>View Category</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="product-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ url('admin/products/create') }}">
            <i class="bi bi-circle"></i><span>Add Product</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/products/') }}">
            <i class="bi bi-circle"></i><span>View Product</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/brands') }}">
        <i class="bi bi-bar-chart"></i><span>Brand</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/admin') }}">
        <i class="bi bi-person"></i>
        <span>User</span>
      </a>
    </li>
  </ul>
   
</aside> --}}