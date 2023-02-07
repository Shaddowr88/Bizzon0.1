@extends('layouts/user')
@section('dash')
    <div class="pr-5" id="app">
        <div class="row ">
            <div  class="col-11">
                {!! $chart->container() !!}
{{--                {!! $chWatter->container() !!}--}}
                {!! $chart ->script() !!}
            </div>
        </div>
        <div class="row d-flex p-2 bd-highlight">
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
            </div>
        </div>
        </div>
{{--    </div>{!! $chWatter ->script() !!}--}}
@endsection


