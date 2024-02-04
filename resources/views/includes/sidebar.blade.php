<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
   
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item">
        <a class="nav-link" href="./index.html">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Components</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      @if (auth()->user()->level == "admin")
      <li class="nav-item dropdown">
        <li class="nav-item dropdown">
          <a href="#siswa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Data Siswa</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="siswa">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{route('siswa.index')}}"><span class="ml-1 item-text">2023/2024</span>
              </a>
            </li>
          </ul>
        </li>
      </li>
      
      <li class="nav-item dropdown">
        <a href="#bayar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Data Pembayaran</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="bayar">
          <li class="nav-item">
            <a class="nav-link pl-3" href="{{route('payment.index')}}"><span class="ml-1 item-text">Asuransi Siswa</span></a>
          </li>
        </ul>
      </li>
      @endif
      
      @if (auth()->user()->level == "siswa")
      <li class="nav-item dropdown">
        <a href="#pembayaran" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Data Pembayaran</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="pembayaran">
          <li class="nav-item"> 
            <a class="nav-link pl-3" href="{{route('transaksi')}}"><span class="ml-1 item-text">Transaksi</span></a>
          </li>
        </ul>
      </li>
      @endif
    </ul>

    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Profile</span>
    </p>


    <ul class="navbar-nav flex-fill w-100 mb-2">
      @if (auth()->user()->level == "admin")
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">
          <i class="fas fa-registered fe-16"></i>
          <span class="ml-3 item-text">Register</span>
        </a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link" href="{{route('profile')}}">
          <i class="fe fe-user fe-16"></i>
          <span class="ml-3 item-text">Profile</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>