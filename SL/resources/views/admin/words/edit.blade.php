@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Word') }}
        </h2>
    </x-slot>

    <div class="py-3 container text-white">
        <form action="{{ route('words.update',$word->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-3 pt-2">
                <label for="word">Word <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded" name='word' id="word" value="{{ $word->word }}" required>
            </div>
            <div class="col-8 py-2">
                <label for="word">Extra</label>
                <input type="text" class="form-control rounded" name='info' id="info" value="{{ $word->info }}">
            </div>

            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>
    </div>
@endsection
