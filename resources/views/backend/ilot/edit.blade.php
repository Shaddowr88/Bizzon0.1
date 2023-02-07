    @extends('layouts/dashAdmin')
    @section('dash')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @if ($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">


                <h1 class="h2">Vous Modifier le Bâtiment test{{$batiment->nom}}</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary"
                           href="{{route('backend_viewByCopro',
                           ['id'=>$batiment->copro_id])}}">Bâtiment</a>
                    </div>
                    <a class="btn btn-sm btn-outline-secondary"  href="{{route('backend_add')}}">
                        <span data-feather="calendar"></span>
                        Nouveau
                    </a>
                </div>
            </div>
            <form action="{{route('backend_ilot_update',['id'=>$batiment->id])}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="col-md-4">
                        {{--Affichage de la mignature de l'image--}}
                        <img width="300" class="img-thumbnail rounded-circle shadow-lg" style="border:3px solid #5b64f1"
                             src="{{asset('storage/uploads/'.$batiment->photo_principale)}}" alt="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="photo_principale">Photo du bâtiment</label>
                        <input type="file" class="form-control-file " id="photo_principale" name="photo_principale">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 border-bottom-dark" >
                        <label for="nom"></label>
                        <input placeholder="Nom du batiment"
                               type="text"
                               class="form-control border-0 form-control @error('nom') is-invalid @enderror"
                               value="{{$batiment->nom}}"
                               id="nom"
                               name="nom"
                        >
                        @error('nom')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="form-group col-md-1 border-bottom-dark ml-3">
                        <label for="numero"></label>
                        <input placeholder="Numero"
                               type="number"
                               class="form-control border-0 form-control @error('numero') is-invalid @enderror"
                               value="{{$batiment->numero}}"
                               id="numero"
                               name="numero"
                        >
                        @error('numero')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-1 border-bottom-dark ml-3">
                        <label for="etage"></label>
                        <input placeholder="Etage"
                               type="number"
                               class="form-control border-0  @error('etage') is-invalid @enderror"
                               value="{{$batiment->etage}}"
                               id="etage"
                               name="etage"
                        >
                        @error('etage')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8 border-bottom-dark ml-3">
                        <label for="adresse">Adresse</label>
                        <textarea type="text"
                                  class="form-control border-0  @error('adresse') is-invalid @enderror"
                                  name="adresse"
                                  id="adresse"
                        >
                            {{$batiment->adresse}}
                        </textarea>
                        @error('adresse')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 col-md-12">
                            <h1 class="h2">P. Communes</h1>
                        </div>
                        <div class="form-group col-md-12">
                            <select multiple class="form-control form-control-lg border-0" id="parties" name="parties[]">
                                @foreach($parties as $partie)
                                    @if(in_array($partie->id,$parties_id))
                                        <option selected value="{{$partie->id}}">{{$partie->nom}}</option>
                                    @else
                                        <option value="{{$partie->id}}">{{$partie->nom}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="produits_recommandes"></label>
                    </div>
                </div>
            </form>
        </main>
    @endsection