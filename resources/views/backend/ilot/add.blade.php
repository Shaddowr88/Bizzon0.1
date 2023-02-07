@extends('layouts/dashAdmin')
@section('dash')
    @if (session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
    @endif

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger w-70 float" style="position: absolute;">--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <p> {{$error}} </p>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
         <h1 class="h2">Ajouter un Batiment</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
             <div class="btn-group mr-2">
                 <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_homepage')}}" >Lister les batiments</a>
             </div>
             <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_add')}}">
                 <span data-feather="calendar"></span>
                 Nouveau
             </a>
         </div>
     </div>
     <form action="{{route('backend_ilot_store')}}" method="post" enctype="multipart/form-data">
         @csrf

         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="nom"></label>
                 <input placeholder="Nom du batiment" type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom">
             </div>
             @error('nom')
             <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
             @enderror

             <div class="form-group col-md-2">
                 <label for="numero"></label>
                 <input placeholder="Numero" type="number" class="form-control form-control @error('numero') is-invalid @enderror" id="numero" name="numero">
             </div>
         </div>
         @error('numero')
         <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
         @enderror
         <div class="form-row">
             <div class="form-group col-md-8">
                 <label for="adresse">Adresse</label>
                 <textarea type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="adresse"></textarea>
                 <span class="invalid-feedback" role="alert"></span>
               @error('adresse')
             <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                 @enderror
             </div>
             <div class="form-row">
                 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 col-md-12">
                     <h1 class="h2">P. Communes</h1>
                 </div>

                 <div class="form-group col-md-12">
                     <label for="parties">Parties</label>
                     <select multiple class="form-control form-control-lg @error('parties') is-invalid @enderror" id="parties" name="parties[]">
                         @foreach($parties as $partie)
                             <option value="{{$partie->id}}">{{$partie->nom}}</option>
                         @endforeach
                     </select>
                     @error('parties')
                     <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span>
                     @enderror
                 </div>

                 <div class="form-row">
                     <div class="form-group">
                         <label for="photo_principale">Photo du produit</label>
                         <input type="file" class="form-control-file" id="photo_principale" name="photo_principale">
                     </div>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="category_id">Copro</label>
                     <label for="copro_id"></label>
                     <select class="form-control form-control-lg" id="copro_id" name="copro_id" >
                         @foreach($copros as $copro)
                             <option value="{{$copro->id}}">
                                 {{$copro->name}}
                             </option>
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

         <script>
             $("document").ready(function(){
                 setTimeout(function(){
                     // $("div.alert").animate({left: '250px'});
                     $("div.alert").remove();
                     $("div.invalid-feedback").remove();
                 }, 1000 ); // 2 secs
             });
         </script>
     </form>
 </main>
@endsection
