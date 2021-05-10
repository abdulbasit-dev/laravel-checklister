<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
  <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button"
    data-target="#sidebar" data-class="c-sidebar-show">
    <svg class="c-icon c-icon-lg">
      <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}">
      </use>
    </svg>
  </button>
  <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button"
    data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
    <svg class="c-icon c-icon-lg">
      <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}">
      </use>
    </svg>
  </button>

  <ul class="c-header-nav ml-auto mr-4">
    <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link"
        href="{{ route('consultation') }}"> {{ __("Get Consultation") }}
      </a></li>

    <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link"
        href="{{ route('welcome') }}">
        <svg class="c-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}">
          </use>
        </svg></a></li>


    <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown"
        href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="c-avatar"> <svg class="c-icon mr-2">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg') }}#cil-user">
            </use>
          </svg></div>
      </a>
      <div class="dropdown-menu dropdown-menu-right pt-0">
        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
          <svg class="c-icon mr-2">
            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
            </use>
          </svg> Logout</a>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
  </ul>

</header>
