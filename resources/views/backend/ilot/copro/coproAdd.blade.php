@extends('layouts/dashAdmin')
@section('dash')
    @if (session('notice'))
        <div class="alert alert-success position-relative ">
            {{ session('notice') }}
        </div>
    @endif
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <h1 class="h2">Cree un nouveau programme</h1>
{{--            <div class="btn-toolbar mb-2 mb-md-0">--}}
{{--                <div class="btn-group mr-2">--}}
{{--                    <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_homepage')}}" >Lister les batiments</a>--}}
{{--                </div>--}}
{{--                <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_add')}}">--}}
{{--                    <span data-feather="calendar"></span>--}}
{{--                    Nouveau--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
        <form action="{{route('backend_coPro_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif

            <div class="form-row">

                    <div class="form-row col-10">
                        <div class="form-group">
                            <label for="photo_principale">Photo du prgramme</label>
                            <input type="file" class="form-control-file" id="photo_principale" name="photo_principale">
                        </div>
                    </div>
                <div class="form-group col-md-6">
                    <label for="name"></label>
                    <input placeholder="Nom de la co-propriété" type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group col-md-2">
                    <label for="cp"></label>
                    <input placeholder="code Postal" type="text" class="form-control" id="cp" name="cp">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-8">
                    <label for="ville">Ville</label>
                    <textarea type="text" class="form-control" name="ville" id="ville"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produits_recommandes"></label>
                </div>
            </div>
        </form>
        <script>
            $("document").ready(function(){
                setTimeout(function(){
                    // $("div.alert").animate({left: '250px'});
                    $("div.alert").remove();
                }, 2000 ); // 2 secs
            });
        </script>
    </main>
@endsection
