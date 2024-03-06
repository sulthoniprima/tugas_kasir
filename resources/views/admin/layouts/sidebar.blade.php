<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-DARK sidebar-dark-warning elevation-4">

  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">

    <a href="index3.html" class="brand-link">
      <!--img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"!-->
      <span class="brand-text font-weight-light"><H3>TOKO GERABAH</H3>
      </span>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- @if(auth()->check())     -->
      <div class="image">
        <img src="/vendor/admin/dist/img/a.jpeg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"></a>
      </div>
      <!-- @endif -->
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/" class="nav-link">
           
            <p>
              Dashboard
            </p>
          </a>
        </li>

        

          @if(auth()->user()->role!="pengguna")
            <li class="nav-item">
              <a href="/admin/kategori" class="nav-link  {{ Request::is('admin/kategori*') ? 'active' : '' }}">
                
                <p>
                  kategori
                </p>
              </a>
            </li>
          @endif
   


        @if(auth()->user()->role!="pengguna")
          <li class="nav-item">
            <a href="/admin/produk" class="nav-link  {{ Request::is('admin/produk*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
        @endif
 
      @if(auth()->user()->role!="admin")
        <li class="nav-item">
          <a href="/kasir/transaksi" class="nav-link  {{ Request::is('admin/transaksi*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
@endif
       
        @if(auth()->user()->role!="pengguna")
        <li class="nav-item">
          <a href="/admin/riwayat" class="nav-link  {{ Request::is('admin/riwayat*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>
              Riwayat
            </p>
          </a>
        </li>
        @endif
     

      
        @if(auth()->user()->role!="pengguna")
          <li class="nav-item">
            <a href="/admin/user" class="nav-link  {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                user
              </p>
            </a>
          </li>
        @endif
    

    
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<div class="content-wrapper">