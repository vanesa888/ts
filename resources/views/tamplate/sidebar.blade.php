<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/logo-umb.PNG')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">S1 INFORMATIKA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/user.PNG')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-user-graduate nav-icon"></i>
              <p>
                Alumni
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('formdata')}}" class="nav-link">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Data Alumni</p>
                </a>
              </li>
              </ul>  
              <li class="nav-item">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>
                Kuisioner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
          @if (auth()->user()->level=="user")   
          <li class="nav-item">
              <a href="{{route('datakuis')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Kuis</p>
              </a>
          </li> 
          @endif     
          @if (auth()->user()->level=="admin") 
          <li class="nav-item">
              <a href="{{route('kategori')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Kategori</p>
              </a>
          </li> 
          <li class="nav-item">
              <a href="{{route('Tanya')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Pertanyaan</p>
              </a>
          </li> 
          <li class="nav-item">
              <a href="{{route('formjaw')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Jawaban</p>
              </a>
          </li>          
          <li class="nav-item">
              <a href="{{route('Hasilcopy')}}" class="nav-link">
                <i class="far fa-file-alt nav-icon"></i>
                <p>Hasil</p>
              </a>
          </li>
          @endif 
          </li>
          </ul>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
                 LogOut
              </p>
            </a>
          </li>    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>