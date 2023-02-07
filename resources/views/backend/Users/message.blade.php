@extends('layouts/dash')
@section('dash')

    <div class="content">
        <div class="title m-b-md">
            Join Live Chat
        </div>
        @if(Session::has('status'))
            <span class="alert alert-info" role="alert">
                    {{ Session::get('status') }}
                </span>
        @endif
        <div>
            <form action="{{ url('/') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" class="form-control"
                           placeholder="Enter your username">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            Join
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
