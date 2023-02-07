@extends ('layouts/dash')
@section('dashMain')
  <div id="wrapper" >
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <div  class=" mt-5 btn dropdown-toggle"
          id="dropdownMenuButton"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false" href="#" style="color:white" >
        <div ><a style="font-max-size: 70px">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <div class="dropdown-menu align-content-start overflow-auto blockquote" aria-labelledby="dropdownMenuButton" style="text-align: center;float-displace: auto">
        <a class=" btn " href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      <!--Nav Item - Dashboard -->
      <li class="nav-item active" style="list-style: none;">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span></span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <p class="nav-link collapsed" href="#"
           data-toggle="collapse"
           data-target="#collapseTwo"
           aria-expanded="true"
           aria-controls="collapseTwo">
          <!-- menus de navigation -->
         Bâtiment
        </p>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('backend_add')}}">Ajouter</a>
            <a class="collapse-item" href="#">Éditer</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu Messages -->
      <li class="nav-item">
        <a class="nav-link collapsed"
           href="#" data-toggle="collapse"
           data-target="#collapseUtilities"
           aria-expanded="true"
           aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          Message
        </a>
        <div id="collapseUtilities"
             class="collapse"
             aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('messages_ask')}}">Demande</a>
            <a class="collapse-item" href="utilities-border.html">Annonce</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu Evenements-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          Annuaire
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('Books_index')}}">Utilisateur</a>
            <a class="collapse-item" href="{{route('Books_syndic')}}">Syndic</a>
            <a class="collapse-item" href="{{route('Books_prestataire')}}">Prestataire</a>
            <a class="collapse-item" href="{{route('Books_other')}}">Numeros utiles</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu document -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedoc"
           aria-expanded="true" aria-controls="collapsedoc">
          <i class="fas fa-fw fa-folder"></i>
          Documents
        </a>
        <div id="collapsedoc" class="collapse" aria-labelledby="headingDoc" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="login.html">Courrier</a>
            <a class="collapse-item" href="register.html">Reglement</a>
            <a class="collapse-item" href="forgot-password.html">Notice</a>
          </div>
        </div>
      </li>
    </ul>
    <div class="col-sm p-5" style="background: white;">
      @yield('dash')
    </div>
  </div>
  <script>
    // $('#myCollapsible').collapse('hide');
    $('#myCollapsible').collapse({
      toggle: false
    });
    $('.dropdown-toggle').dropdown()
  </script>
@endsection