@extends('layouts.app')

@section('content')
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Word') }}
        </h2>
    </x-slot>

    <div class="py-3 container text-white">
        <div class="row">
            <div class="col-12">
                <form  method="POST" action="{{ route('signs.update', $sign) }}">
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="video">Youtube URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded" name='video' id="video" value="www.youtube.com/watch?v={{ $sign->video }}" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <label for="definition">Definition <span class="text-danger">*</span></label>
                            <input type="text" height='15rem'class="form-control rounded" name='definition' id="definition" value="{{ $sign->definition }}" required>
                        </div>
                        <div class="col-5">
                            <label for="pronunciation">Pronuncitation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name='pronunciation' id="pronunciation" value="{{ $sign->pronunciation }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="extra">Extra <span class="text-muted h6">(Optional)</span></label>
                        <input type="text" class="form-control rounded" name='extra' id="extra" value="{{ $sign->extra }}">
                    </div>
                    {{-- <input type="hidden" name="word_id" value='{{ $word }}'> --}}
                    <button type="submit" class="btn btn-outline-bg-l mt-3 text-white"><i class="bi bi-patch-check-fill"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection