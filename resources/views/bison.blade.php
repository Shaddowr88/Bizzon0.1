<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Bizon</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Bizon Web 0.1</h2>
        <a href="{{ route('login') }}" class="btn btn-primary js-scroll-trigger">Get Started</a>
         @guest
         <ul class="navbar-nav ml-auto">
         <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
           <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
             <div class="my-3 py-3">
             </div>
             <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
           </div>
           <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
             <div class="my-3 p-3">
             </div>
             <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
           </div>
         </div>

        @endguest
         </ul>
      </div>

    </div>
  </header>
