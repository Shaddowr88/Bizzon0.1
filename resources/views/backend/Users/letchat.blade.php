@extends('layouts/dash')
@section('dash')

    <div id="app" class="flex-center position-ref full-height">
        <div class="top-right links">
            <a class="btn btn-primary btn-lg" type="submit" href="{{ route('logout') }}">
                Quitter le Chat Room
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Live Chat Room </div>
                        <chatbox user-id='{{ $userId }}' room-id='{{ $roomId }}' :initial-messages='@json($messages)'>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                        </chatbox>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
