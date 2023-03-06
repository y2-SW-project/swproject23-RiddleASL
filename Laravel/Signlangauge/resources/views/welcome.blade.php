@extends('layouts.app')

@section('content')
    <div class="container-fluid justify-content-center font-main">
        <div class="container pb-4">
            <div class="row round-around bg-lite round-bottom justify-between">
                <div class="col-6">
                    <img class="img-fluid" src="{{ url('/storage/images/person-taking-an-online-class.png') }}" alt="">
                </div>
                <div class="col-6 text-white d-flex align-items-center justify-content-around">
                    <div class="pe-5 lineH-2">
                        <p class='fnt-3 fw-bold pe-5'>Welcome to</p>
                        <p class='fnt-2 fw-bold ps-5'>Sign Field</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection