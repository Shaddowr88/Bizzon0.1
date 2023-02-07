@extends('layouts/dashAdmin')
@section('dash')
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="row">
            <div class="col-12 mb-2 ">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">annuaire</h5>
                                <h2 class="card-title">Prestataires</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-sm ">
                            <thead class="table-dark">
                            <tr>

                                <th>ID</th>
                                <th>nom</th>
                                <th>Bat</th>
                                <th>objet</th>
                                <th></th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--                        @foreach($batiments as $batiment)--}}
                            <tr>
                                {{--                                <td>{{$batiment->id}}</td>--}}
                                {{--                                <td>{{$batiment->nom}}</td>--}}
                                {{--                                <td>{{$batiment->etage}}</td>--}}
                                {{--                                <td>{{$batiment->adresse}}</td>--}}
                                {{--                                <td></td>--}}
                                {{--                                <td>--}}
                                <a href="#" class="btn btn-sm btn-primary"> Refuser</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Valider</a>

                                </td>
                            </tr>
                            {{--                        @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="info-icon text-center icon-warning">
                            <i class="tim-icons icon-chat-33"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="numbers">
                            <p class="card-category">Autres</p>
                            <h3 class="card-title">15</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="info-icon text-center icon-primary">
                            <i class="tim-icons icon-shape-star"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="numbers">
                            <p class="card-category">Syndic</p>
                            <h3 class="card-title">2</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="info-icon text-center icon-success">
                            <i class="tim-icons icon-single-02"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="numbers">
                            <p class="card-category">Utilisateurs</p>
                            <h3 class="card-title">150</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>

@endsection
