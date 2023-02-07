@extends('layouts/dashAdmin')
@section('dash')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
            <h1 class="h2 mb-4">Vous modifier programme {{$copro->name}}</h1>
            <form action="{{route('backendCoProUpdate',['id'=>$copro->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <p> {{$error}} </p>
                        @endforeach
                    </div>
                @endif
                <div class="form-row">
                    <div class="col-md-4">
                        {{--                    Affichage de la mignature de l'image--}}
                        <img width="100" class="img-thumbnail rounded-circle shadow-lg" style="border:2px solid #5b64f1"
                             src="{{asset('storage/uploads/'.$copro->photo_principale)}}" alt="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="photo_principale">Photo du Programme</label>
                        <input type="file" class="form-control-file " id="photo_principale" name="photo_principale">
                    </div>
                </div>
                <div class="form-row mt-4">
                    <div class="form-group col-md-6 border-bottom-dark" >
                        <label for="name"></label>
                        <input placeholder="Nom du batiment"
                               type="text"
                               class="form-control border-0"
                               value="{{$copro->name}}"
                               id="nom"
                               name="name"
                        >
                    </div>
                    <div class="form-group col-md-1 border-bottom-dark ml-3">
                        <label for="cp"></label>
                        <input placeholder="cp"
                               type="text"
                               class="form-control border-0"
                               value="{{$copro->cp}}"
                               id="cp"
                               name="cp"
                        >
                    </div>

                    <div class="form-group col-md-1 border-bottom-dark ml-3">
                        <label for="etage"></label>
                        <input placeholder="etage"
                               type="text"
                               class="form-control border-0"
                               value="{{$copro->etage}}"
                               id="etage"
                               name="etage"
                        >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8 border-bottom-dark ml-3">
                        <label for="ville"></label>
                        <textarea type="text"
                                  class="form-control border-0"
                                  name="ville"
                                  id="ville">
                            {{$copro->ville}}
                        </textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="produits_recommandes"></label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        <h1 class="h2 mb-4 mt-5"> Batiments </h1>
        <div class="form-row mt-1 col-12">
                    <ul class="list-group list-group-flush col-10 ">
                        @foreach($batiments as $batiment)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-9">
                                        <h4 style=" text-transform: capitalize ">{{$batiment->nom}}</h4>
                                        {{$batiment->adresse}}
                                    </div>

                                    <div class="col-3">
                                        <a  href="{{route('backendCoProEdit',['id'=>$copro->id])}}"
                                            class="btn btn-sm btn-primary col-12 mb-2">Modifier</a>
                                        <a onclick="return(confirm('sans regret ? '))"
                                           href="{{route('coProDelete',['id'=>$copro->id]) }}"
                                           class="btn btn-sm btn-danger col-12">
                                            Supprimer
                                        </a>
                                    </div>


                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
    </main>
@endsection



{{--@extends('layouts/dashAdmin')--}}
{{--@section('dash')--}}
{{--    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">--}}
{{--        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 mt-4 ">--}}
{{--            <h1 class="h2">Actuelment vous Modifier le programme {{$copro->nom}}</h1>--}}
{{--            <div class="btn-toolbar mb-4 mb-md-0">--}}
{{--                <div class="btn-group mr-2">--}}
{{--                    <a class="btn "--}}
{{--                       href="{{route('backend_homepage')}}"--}}
{{--                    >Lister des programme</a>--}}
{{--                </div>--}}
{{--                <a class="btn "  href="{{route('coPro_add')}}">--}}
{{--                    <span data-feather="calendar"></span>--}}
{{--                    Nouveau--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <form action="{{route('backendCoProUpdate',['id'=>$copro->id])}}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            @if ($errors->any())--}}
{{--                <div class="alert-danger">--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <p> {{$error}} </p>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="form-row">--}}
{{--                <div class="col-md-4">--}}
{{--                    --}}{{--                    Affichage de la mignature de l'image--}}
{{--                    <img width="300" class="img-thumbnail rounded-circle shadow-lg" style="border:3px solid #5b64f1"--}}
{{--                         src="{{asset('storage/uploads/'.$copro->photo_principale)}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="photo_principale">Photo du programme</label>--}}
{{--                    <input type="file" class="form-control-file " id="photo_principale" name="photo_principale">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-row">--}}
{{--                <div class="form-group col-md-6 border-bottom-dark" >--}}
{{--                    <label for="name"></label>--}}
{{--                    <input placeholder="Nom du programme"--}}
{{--                           type="text"--}}
{{--                           class="form-control border-0"--}}
{{--                           value="{{$copro->name}}"--}}
{{--                           id="name"--}}
{{--                           name="name"--}}
{{--                    >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2 border-bottom-dark ml-3">--}}
{{--                    <label for="cp"></label>--}}
{{--                    <input placeholder=cp"--}}
{{--                           type="text"--}}
{{--                           class="form-control border-0"--}}
{{--                           value="{{$copro->cp}}"--}}
{{--                           id="cp"--}}
{{--                           name="cp"--}}
{{--                    >--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-2 border-bottom-dark ml-3">--}}
{{--                    <label for="ville"></label>--}}
{{--                    <input placeholder="ville"--}}
{{--                           type="text"--}}
{{--                           class="form-control border-0"--}}
{{--                           value="{{$copro->ville}}"--}}
{{--                           id="ville"--}}
{{--                           name="ville"--}}
{{--                    >--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  mt-3">--}}
{{--                <h1 class="h2">batiments</h1>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <div class="form-row mt-1 col-12">--}}
{{--            <ul class="list-group list-group-flush col-10 ">--}}
{{--                @foreach($batiments as $batiment)--}}
{{--                    <li class="list-group-item">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-9">--}}
{{--                                <h4>{{$batiment->nom}}</h4>--}}
{{--                                {{$batiment->adresse}}--}}
{{--                            </div>--}}

{{--                            --}}{{--                    <div class="col-3">--}}
{{--                            --}}{{--                        <a  href="{{route('backendCoProEdit',['id'=>$copro->id])}}"--}}
{{--                            --}}{{--                            class="btn btn-sm btn-primary col-12 mb-2">Modifier</a>--}}
{{--                            --}}{{--                        <a onclick="return(confirm('sans regret ? '))"--}}
{{--                            --}}{{--                           href="{{route('coProDelete',['id'=>$copro->id]) }}"--}}
{{--                            --}}{{--                           class="btn btn-sm btn-danger col-12">--}}
{{--                            --}}{{--                            Supprimer--}}
{{--                            --}}{{--                        </a>--}}
{{--                            --}}{{--                    </div>--}}


{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-primary">Valider</button>--}}
{{--    </main>--}}

{{--@endsection--}}