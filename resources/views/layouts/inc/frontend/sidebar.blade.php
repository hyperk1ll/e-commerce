<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/collections') }}">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
        <i class="mdi mdi-circle-outline menu-icon"></i>
        <span class="menu-title">Category</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-category">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('collections/switch') }}">Switch</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('collections/router') }}">Router</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('collections/peripheral') }}">Peripheral</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('collections/server') }}">Server</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
        <span class="menu-title">Brands</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-products">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('search?search=ASUS') }}">ASUS</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('search?search=Tenda') }}">Tenda</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('search?search=Acer') }}">Acer</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">Contacts</span>
      </a>
    </li>
  </ul>
</nav>
