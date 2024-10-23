<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Banner
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Media Manager</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Banners</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Banner Options:</h6>
          <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
          <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#warehouse" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>warehouse</span>
      </a>
      <div id="warehouse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">warehouse Options:</h6>
          <a class="collapse-item" href="{{route('warehouse.index')}}">warehouse</a>
          <a class="collapse-item" href="{{route('warehouse.create')}}">Add warehouse</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#location" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>location</span>
      </a>
      <div id="location" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">location Options:</h6>
          <a class="collapse-item" href="{{route('location.index')}}">location</a>
          <a class="collapse-item" href="{{route('location.create')}}">Add location</a>
        </div>
      </div>
    </li>



    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#operation" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>operation Type</span>
      </a>
      <div id="operation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">operation Type</h6>
          <a class="collapse-item" href="{{route('operation.index')}}">Operation</a>
          <a class="collapse-item" href="{{route('operation.create')}}">Add Operation</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stockpicking" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>stock picking</span>
      </a>
      <div id="stockpicking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">stock picking</h6>
          <a class="collapse-item" href="{{route('stockpicking.index')}}">stock picking</a>
          <a class="collapse-item" href="{{route('stockpicking.create')}}">Add Operation</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#test" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span> contracts</span>
      </a>
      <div id="test" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new contracts</h6>
          <a class="collapse-item" href="{{route('contracts.index')}}">new contracts</a>
          <a class="collapse-item" href="{{route('stockpicking.index')}}">Add new contracts</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#fleetcontracts" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>fleetcontracts</span>
      </a>
      <div id="fleetcontracts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new fleetcontracts</h6>
          <a class="collapse-item" href="{{route('fleetcontracts.index')}}">new fleetcontracts</a>
          <a class="collapse-item" href="{{route('fleetcontracts.create')}}">Add new fleetcontracts</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accessories" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>accessories</span>
      </a>
      <div id="accessories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new accessories</h6>
          <a class="collapse-item" href="{{route('accessories.index')}}">new accessories</a>
          <a class="collapse-item" href="{{route('accessories.create')}}">Add new accessories</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vehicles" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>vehicles</span>
      </a>
      <div id="vehicles" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new vehicles</h6>
          <a class="collapse-item" href="{{route('vehicles.index')}}">new vehicles</a>
          <a class="collapse-item" href="{{route('vehicles.create')}}">Add new vehicles</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#models" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>models</span>
      </a>
      <div id="models" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new models</h6>
          <a class="collapse-item" href="{{route('models.index')}}">new models</a>
          <a class="collapse-item" href="{{route('stockpicking.index')}}">Add new models</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vcategory" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>vcategory</span>
      </a>
      <div id="vcategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new vcategory</h6>
          <a class="collapse-item" href="{{route('vcateories.index')}}">new vcategory</a>
          <a class="collapse-item" href="{{route('stockpicking.index')}}">Add new vcategory</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Inventory" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Inventory</span>
      </a>
      <div id="Inventory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new Inventory</h6>
          <a class="collapse-item" href="{{route('inventory.index')}}">new Inventory</a>
          <a class="collapse-item" href="{{route('inventory.create')}}">Add new Inventory</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rental" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>rental</span>
      </a>
      <div id="rental" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new rental</h6>
          <a class="collapse-item" href="{{route('rental.index')}}">new rental</a>
          <a class="collapse-item" href="{{route('rental.create')}}">Add new rental</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#customers" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>customers</span>
      </a>
      <div id="customers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new customers</h6>
          <a class="collapse-item" href="{{route('customers.index')}}">new customers</a>
          <a class="collapse-item" href="{{route('customers.create')}}">Add new customers</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#investor" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>investor</span>
      </a>
      <div id="investor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new investor</h6>
          <a class="collapse-item" href="{{route('investor.index')}}">new investor</a>
          <a class="collapse-item" href="{{route('investor.create')}}">Add new investor</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sales" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>sales</span>
      </a>
      <div id="sales" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new sales</h6>
          <a class="collapse-item" href="{{route('sales.index')}}">new sales</a>
          <a class="collapse-item" href="{{route('sales.create')}}">Add new sales</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#maintenance" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>maintenance</span>
      </a>
      <div id="maintenance" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">new maintenance</h6>
          <a class="collapse-item" href="{{route('maintenance.index')}}">new maintenance</a>
          <a class="collapse-item" href="{{route('maintenance.create')}}">Add new maintenance</a>
        </div>
      </div>
    </li>
    


    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Shop
        </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Category</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category Options:</h6>
            <a class="collapse-item" href="{{route('category.index')}}">Category</a>
            <a class="collapse-item" href="{{route('category.create')}}">Add Category</a>
          </div>
        </div>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span>Bikes</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bike Options:</h6>
            <a class="collapse-item" href="{{route('product.index')}}">Bike</a>
            <a class="collapse-item" href="{{route('product.create')}}">Add Bike</a>
          </div>
        </div>
    </li>

    {{-- Brands --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true" aria-controls="brandCollapse">
          <i class="fas fa-table"></i>
          <span>Brands</span>
        </a>
        <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Brand Options:</h6>
            <a class="collapse-item" href="{{route('brand.index')}}">Brands</a>
            <a class="collapse-item" href="{{route('brand.create')}}">Add Brand</a>
          </div>
        </div>
    </li>

    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span>Shipping</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Shipping Options:</h6>
            <a class="collapse-item" href="{{route('shipping.index')}}">Shipping</a>
            <a class="collapse-item" href="{{route('shipping.create')}}">Add Shipping</a>
          </div>
        </div>
    </li>


   
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Orders</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Reviews</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Posts
    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
        <i class="fas fa-fw fa-folder"></i>
        <span>Posts</span>
      </a>
      <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Post Options:</h6>
          <a class="collapse-item" href="{{route('post.index')}}">Posts</a>
          <a class="collapse-item" href="{{route('post.create')}}">Add Post</a>
        </div>
      </div>
    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
          <i class="fas fa-sitemap fa-folder"></i>
          <span>Category</span>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category Options:</h6>
            <a class="collapse-item" href="{{route('post-category.index')}}">Category</a>
            <a class="collapse-item" href="{{route('post-category.create')}}">Add Category</a>
          </div>
        </div>
      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
            <i class="fas fa-tags fa-folder"></i>
            <span>Tags</span>
        </a>
        <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tag Options:</h6>
            <a class="collapse-item" href="{{route('post-tag.index')}}">Tag</a>
            <a class="collapse-item" href="{{route('post-tag.create')}}">Add Tag</a>
            </div>
        </div>
    </li>

      <!-- Comments -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('comment.index')}}">
            <i class="fas fa-comments fa-chart-area"></i>
            <span>Comments</span>
        </a>
      </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        General Settings
    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Coupon</span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>