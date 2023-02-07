@extends ('layouts/dash')
@section('dashMain')
<div class="col-sm p-5">
    <div class="row align-items-center">
        <div class="col-md-4 mb-4" ><h1 id="mydiv" class="h3 mb-0" style="color: white; padding: 1em">Bienvenue <br></h1>
            <h1 class="h3 mb-0 text-gray-800 mt-5">{{ Auth::user()->name }}</h1></div>
    </div>
    <div class="row">
{{--        <div class="col-4">--}}
{{--            <div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250">--}}
{{--                <h1 class=""><span class="badge badge-secondary">{{ Auth::user()->appartement_id }}</span></h1>--}}
{{--            </div>--}}
{{--        </div>--}}
            <div class="col-6 pl-3 d-flex flex-column position-static">
                <a class="text-uppercase ">Adresse rue user </a>
{{--                <a class="text-uppercase ">Adresse rue user </a>--}}
            </div>

    </div>

    <div class="row h-30 ">
        <div class="col-md-2  ">
            <div class="accordion" id="accordion" >
                <div class="mb-2">
                    <div  id="headingTwo">
                        <h2 class="mb-3">
                            <button class="btn collapsed mb-5 mt-4  btn-block" type="button" data-toggle="collapse" id="collapseMenu1"
                                    style="background: linear-gradient(90deg, rgba(33,188,249,0.8925945378151261) 0%, rgba(0,153,255,1) 95%);
                                     filter: brightness(1); box-shadow: 5px 10px 30px rgb(33,188,249);"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" aria-haspopup="true">
                                <a class="alert" style="color:white">Ma Co-pro</a>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="collapseMenu1" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="nav-item" style="list-style: none;">
                                <li> <a class="collapse-item" href="{{route('my_index')}}">Evenement</a></li>
                                <li> <a class="collapse-item" href="{{route('signal')}}" >Signaler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" mb-2">
                    <div  id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn collapsed"
                                    type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"><a class="alert">Contacts</a></button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="nav-item" style="list-style: none;">
                                <li><a class="collapse-item" href="{{route('contact_syndic')}}" >Syndic</a></li>
                                <li><a class="collapse-item" href="{{route('contact_prestataire')}}" >Prestataires</a></li>
                                <li><a class="collapse-item" href="{{route('contact_utility')}}" >N° utiles</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div >
                    <div  id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour"><a class="alert">Documents</a></button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="nav-item" style="list-style: none;">
                                <li><a class="collapse-item" href="{{route('Documents')}}" >Relevés de charges</a></li>
                                <li><a class="collapse-item" href="{{route('dating')}}" >Assemblée générale</a></li>
                                <li><a class="collapse-item" href="{{route('settlement')}}" >Règlementations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10" height="100%">
            @yield('dash')
        </div>
  </div>
    <div>
        <a class="mt-2 btn" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>

<style>
    #mydiv{

        position: absolute;
        left: 20em;
        width: 300px;
        padding: 10px;
        border-radius: 10px;
        background: linear-gradient(90deg, rgba(33,188,249,0.8925945378151261) 0%, rgba(0,153,255,1) 95%);
        filter: brightness(1); box-shadow: 5px 10px 30px rgb(33,188,249);
    }
</style>

<script>
    $('.dropdown-toggle').dropdown();
    setTimeout(function() {
        $('#mydiv').fadeOut('fast');
    }, 4000);
</script>
@endsection