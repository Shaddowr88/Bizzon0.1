@extends('layouts/dash')
@section('dash')

    <div id="app" class="flex-center position-ref full-height">
        <div class="top-right links">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Leave Chat Room
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Live Chat Room </div>
                        <chatbox user-id='{{ $userId }}' room-id='{{ $roomId }}' :initial-messages='@json($messages)'> </chatbox>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
