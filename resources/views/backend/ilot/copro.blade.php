@extends('layouts/dashAdmin')
@section('dash')

    <div class="col-xl-12 col-xs-6 col-md-6 ">
        <div class="row">
            <div class="col-12 mb-2 ">
                <div class="col-xl-10">
                    <div>
                        <div class="row mt-5">
                            <div class="col-xl-12  col-sm-7 text-left">
                                <h5 class="card-category"></h5>
                                <h2 class="card-title mt-6">Copropriétés</h2>
                            </div>
                            @if ($errors->any())
                                <div class="alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p> {{$error}} </p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (session('notice'))
                        <div class="alert alert-success position-relative popover" >
                            {{ session('notice') }}
                        </div>
                    @endif
{{--                    <a class="btn btn-dark" href="{{route('coPro_add')}}" style="background: linear-gradient(90deg, rgba(33,188,249,0.8925945378151261) 0%, rgba(0,153,255,1) 95%);--}}
{{--                                     filter: brightness(1); box-shadow: 5px 10px 30px rgb(33,188,249); border: none">Ajouter</a>--}}
                    <div class="row mt-4">
                        @foreach($copros as $copro)


                            <div class="card m-2 shadow-sm" style="max-width: 35vh;">
                                <div class="row no-gutters align-content-center" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">
                                    <div class="col-md-6">
                                        <img src="{{asset('storage/uploads/'.$copro->photo_principale)}}" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}" class="card-img h-100 " alt="{{$copro->name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">
                                                <a href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">{{$copro->name}}</a> </h5>
                                            <p class="card-text">{{$copro->ville}}</p>
                                            <tr>
                                                <td>
                                                    <a  href="{{route('backendCoProEdit',['id'=>$copro->id])}}"
                                                        class="btn btn-sm btn-primary col-12 mb-2">Modifier</a>
                                                    <a onclick="return(confirm('sans regret ? '))"
                                                       href="{{route('coProDelete',['id'=>$copro->id]) }}"
                                                       class="btn btn-sm btn-danger col-12">
                                                        Supprimer
                                                    </a>
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-lg-4 col-md-6 mb-5 ">--}}
{{--                                <div class="card card-stats">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-5">--}}
{{--                                                <div class="info-icon text-center icon-warning">--}}
{{--                                                    <i class="tim-icons icon-chat-33"></i>--}}
{{--                                                    <div class="info-icon text-center icon-warning">--}}
{{--                                                        <a>--}}
{{--                                                            <img style="height: 10rem;" class= h-rounded"--}}
{{--                                                                 src="{{asset('storage/uploads/'.$copro->photo_principale)}}"--}}
{{--                                                                 alt="{{$copro->name}}">--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-7">--}}
{{--                                                <div class="numbers">--}}
{{--                                                    <a href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">--}}
{{--                                                        <strong>{{$copro->ville}}</strong>--}}
{{--                                                        {{$copro->cp}}--}}
{{--                                                    </a>--}}
{{--                                                    <h4 class="card-title">{{$copro->name}} </h4>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>--}}
{{--                                                            <a  href="{{route('backendCoProEdit',['id'=>$copro->id])}}"--}}
{{--                                                               class="btn btn-sm btn-primary col-12 mb-2">Modifier</a>--}}
{{--                                                            <a onclick="return(confirm('sans regret ? '))"--}}
{{--                                                               href="{{route('coProDelete',['id'=>$copro->id]) }}"--}}
{{--                                                               class="btn btn-sm btn-danger col-12">--}}
{{--                                                                Supprimer--}}
{{--                                                            </a>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        @endforeach
                    </div>
              {{$copros->links()}}
                </div>
            </div>
        </div>
    </div>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                // $("div.alert").animate({left: '250px'});
                $("div.alert").remove();
            }, 2000 ); // 2 secs
        });
    </script>
@endsection



