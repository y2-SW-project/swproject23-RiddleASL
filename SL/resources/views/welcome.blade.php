@extends('layouts.app')

@section('content')
    <div class="container-fluid ff text-white p-0">
        <div class="container">
            <div class="row">
                <div class="col-12 bg-bg-l radius-btm-1 justify-content-between align-items-center d-flex">
                    <div>
                        <img src="{{ URL::asset('images/Welcome Card.png') }}" alt="">
                    </div>
                    <div class="text-white fw-bold px-5 mx-5">
                        <p class="fs-3 lh-1">Welcome to</p>
                        <p class="fs-2 lh-1 ps-5">Sign Field</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4 bg-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-between align-items-center d-flex">
                        <div>
                            <img src="{{ URL::asset('images/func1.png') }}" alt="" class="pt-5">
                        </div>
                        <div class="fw-bold px-5 mx-5">
                            <div class="text-end">
                                <p class="text-start fs-4 lh-1 m-0">Learn new</p>
                                <p class="fs-2 lh-1 ps-5 m-0">Vocabulary</p>
                                <p class="lh-1 fs-3 m-0">for free</p>
                            </div>
                            <div class="text-center pt-5">
                                <a href="{{ route('words.index') }}"><button class="btn btn-outline-light fs-4 fw-bold border border-4 border-white">Word Bank</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-bg-l">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-between align-items-center d-flex">
                        <div class="fw-bold px-5 mx-5">
                            <div class="text-end">
                                <p class="text-start fs-4 me-5 lh-1 m-0">Find</p>
                                <p class="text-center fs-2 lh-1 pe-3 m-0">Events</p>
                                <p class="lh-1 fs-3 m-0 ps-5">near you</p>
                            </div>
                            <div class="text-center pt-5">
                                <a href="#"><button class="btn btn-outline-light fs-4 fw-bold border border-4 border-white">Events</button></a>
                            </div>
                        </div>
                        <div>
                            <img src="{{ URL::asset('images/func2.png') }}" alt="" class="pt-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-between align-items-center d-flex">
                        <div>
                            <img src="{{ URL::asset('images/func3.png') }}" alt="" class="pt-5">
                        </div>
                        <div class="fw-bold px-5 mx-5">
                            <div class="text-end">
                                <p class="text-start fs-4 lh-1 m-0">discover</p>
                                <p class="fs-2 lh-1 ps-5 m-0">Communities</p>
                                <p class="lh-1 fs-3 m-0">for you</p>
                            </div>
                            <div class="text-center pt-5">
                                <a href="{{ route('home.index') }}"><button class="btn btn-outline-light fs-4 fw-bold border border-4 border-white">Communities</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection