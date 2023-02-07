@extends('layouts/dashAdmin')
@section('dash')

    <div class="col-xl-12 col-md-6 mb-4">
        @if (session('notice'))
            <div class="alert alert-success w-25" style="float: bottom; ">
                {{ session('notice') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12 mb-2 ">
                <div>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h2 style="color: #2e59d9; text-transform: uppercase;"><strong>{{$copro->name}}</strong></h2>
                                <h5 class="card-category"></h5>
                                @if (count($batiments) === 1)
                                    <h3 class="card-title">Bâtiment</h3>
                                @elseif (count($batiments) > 1)
                                    <h3 class="card-title">Bâtiments</h3>
                                @else
                                    <h3 class="card-title">Aucun bâtiment disponible ! </h3>
                                    <a>Cliquez</a> <a href="{{route('backend_add')}}"> <strong>ici</strong></a> <a>pour en ajouter.</a>
                                @endif
                            </div>
                            @if ($errors->any())
                                <div class="alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p> {{$error}} </p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    <div class="popover" role="popover"><div class="popover-arrow"></div><div class="popover-inner"></div></div>

{{--                    Liste de batiment s'il en à au moins 1--}}
                    @if (count($batiments) > 0)
                    <table class="table-sm table-striped table-sm text-center ">
                        <thead class="#" >
                        <tr class="text-center"
                            style="text-transform: capitalize">
                            <th class="w-25 h-50 p-1"></th>
                            <th>Bâtiment</th>
                            <th>Étage</th>
                            <th>Adresse</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($batiments as $batiment)
                            <tr>
                                <td style="background: white">
                                    <a href="{{route('backend_viewByBatiment',['id'=>$batiment->id]) }}">
                                        <img class="w-50 rounded"
                                             src="{{asset('storage/uploads/'.$batiment->photo_principale)}}"
                                             alt="{{$batiment->nom}}">
                                    </a>
                                </td>
                                <td>
                                    <a style="
                                        text-transform: capitalize;
                                        text-decoration: none;
                                        text-align-last: left;"
                                       href="{{route('backend_viewByBatiment',['id'=>$batiment->id]) }}">
                                        {{$batiment->nom}}
                                    </a>
                                </td>
                                <td>{{$batiment->etage}}</td>
                                <td>{{$batiment->adresse}}</td>
                                <td style="background:white; margin-left: 4em;" >
{{--                                    <button type="button" class="btn btn-secondary"--}}
{{--                                            data-container="body" data-toggle="popover"--}}
{{--                                            data-placement="left"--}}
{{--                                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">--}}
{{--                                        Popover on left--}}
{{--                                    </button>--}}
                                    <div class="row overflow-auto pl-4">
                                    <a href="{{route('backend_edit',['id'=>$batiment->id])}}"
                                       class="btn align-middle">Modifier</a>
                                    </div>
                                    <div class="row overflow-auto pl-4">
                                    <a onclick="return(confirm('sans regret ? '))"
                                       href="{{route('backend_ilot_delete',['id'=>$batiment->id]) }}"
                                       class="btn align-middle">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5 overflow-auto " >
        <div class="col-lg-4 col-md-6">
            <div class="card card-stats" id="mycard">
                <div class="card-body">
                    <div class="row">
                        <div   class=" btn" data-toggle="modal" data-target="#intervenantModal">
                            <div class="numbers">
                                <p class="card-category" id="mytextW">Prestataires</p>
                                <h5 class="card-title" id="mytextW">5</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="intervenantModal" tabindex="-1"
                         role="dialog" aria-labelledby="intervenantModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="intervenantModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{--                                    {{$budgets}}--}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @foreach($budgets as $budget)
        <div class="col-lg-4 col-md-6">
            <div class="card card-stats" id="mycard">
                <div class="card-body">
                    <div class="row">
                        <div   class=" btn" data-toggle="modal" data-target="#exampleModal">
                            <div class="numbers">
                                <p class="card-category"id="mytextW">Budget</p>
                                <h5 class="card-title" id="mytextW"> {{$budget->budget}} €</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                         role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true" >
                        <div class="modal-dialog" style="max-width:70em; " role="document">
                            <div class="modal-content" style="background-color:rgba(225, 226, 238, 0.9);">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px;
                                    background: -webkit-linear-gradient(90deg, rgba(33,188,249,0.8925945378151261) 0%, rgba(0,153,255,1) 95%);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;"> <strong>{{$copro->name}} </strong><br> Budget {{$budget->budget}} €</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <a href="#"></a>
                                        <div  class="col-11 pb-4 " style="max-height: 30em;  ">
                                            test
                                            {!! $chart->container() !!}
                                            {!! $chart ->script() !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
{{--                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>--}}
                                    <button type="button" class="btn btn-primary">Modifier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-lg-4 col-md-6" >
            <div class="card card-stats" id="mycard">
                <div class="card-body">
                    <div class="row">
                        <div   class=" btn" data-toggle="modal" data-target="#intervenantModal">
                            <div class="numbers">
                                <p class="card-category" id="mytextW">Interventions</p>
                                <h5 class="card-title" id="mytextW">5</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="intervenantModal" tabindex="-1"
                         role="dialog" aria-labelledby="intervenantModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="intervenantModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{--                                    {{$budgets}}--}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    @endif

    <style>
        #mycard{box-shadow: 5px 10px 30px rgb(33,188,249);}

        /*#mytextW{color:white}*/

    </style>

    <script>
        $("document").ready(function(){
            setTimeout(function(){
                // $("div.alert").animate({left: '250px'});
                $("div.alert").remove();
            }, 2000 ); // 2 secs
        });

        $(function () {
            $('[data-toggle="popover"]').popover();
            $('.example-popover').popover({container: 'body'});
            //$('[data-toggle="popover"]').popover();
            $('.popover-dismiss').popover({trigger: 'focus'});
            $("document").ready(function(){
                setTimeout(function(){
                    // $("div.alert").animate({left: '250px'});
                    $("div.alert").remove();
                }, 2000 ); // 2 secs
            });
        });


    </script>
@endsection
