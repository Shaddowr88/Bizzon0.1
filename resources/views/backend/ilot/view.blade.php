@extends('layouts/dashAdmin')
@section('dash')
<div class="row rounded-circle" style="display: block; position: absolute; margin-top: 3em;">
    <a href="{{route('backend_viewByBatiment',
                 ['id'=>$batiment->id]) }}">
        <img class="rounded" style="max-height:85vh; "
             src="{{asset('storage/uploads/'.$batiment->photo_principale)}}"
             alt="{{$batiment->nom}}">
    </a>
   </div>
    <main role="main" class="col-md-9 col-lg-12 px-4">
        <div class="row mt-5 h-50 shadow">

            <div class="col-7" style="display: block; position: absolute; margin-top: 3em; ">
            <div class="card mb-3 p-5 ">
            <div class="d-flex overflow-auto justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 ml-5 h-50">
                <h1 class="h2">Batiment <br> {{$batiment->nom}} </h1>
                <div class="mt-2 ml-3 align-content-center p-2">
                    <div class="btn-group m-1">
                        <a class="btn btn-sm btn-outline-secondary"
                           href="{{route('backend_viewByCopro',
                           ['id'=>$batiment->copro_id])}}">
                            Lister les batiments</a>
                    </div>

                    <div class="btn-group m-1 ">
                        <a href="{{route('backend_edit',['id'=>$batiment])}}"
                           class="btn btn-sm btn-outline-secondary"> Modifier </a>
                    </div>


                </div>
            </div>
            <div class="card-body" id="parties" name="parties[]">
                <h5 class="card-title">Batiment {{$batiment->adresse}}</h5>
{{--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                @foreach($parties as $partie)
                    @if(in_array($partie->id,$parties_id))
                        <span  class="badge badge-pill badge-primary">{{$partie->nom}}</span>
                    @else
                        <span class="badge badge-pill badge-primary"></span>
                    @endif
                @endforeach
            </div>
        </div>
            </div>
        </div>
            <div class="row">
            @if ($errors->any())
                <div class="alert-danger col-3">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif
{{--                <div class="card" style="width: 18rem;">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">LL</h5>--}}
{{--                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>--}}
{{--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        <a href="#" class="card-link">Card link</a>--}}
{{--                        <a href="#" class="card-link">Another link</a>--}}
{{--                    </div>--}}
        </div>
    </main>
@endsection