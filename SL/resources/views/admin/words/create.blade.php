@extends('layouts.app')

@section('content')
    <div class="py-3 container text-white">
        <div class="row">
            <div class="col-12">
                <form  method="POST" action="{{ route('words.store') }}">
                    @csrf
                    <div class="col-4">
                        <label for="word">Word <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded" name='word' id="word" placeholder="Please enter a word..." required>
                    </div>
                    <div class="col-6">
                        <label for="info">Info</label>
                        <input type="text" class="form-control rounded" name='info' id="info" placeholder="Please enter a info...">
                    </div>
                    <button type="submit" class="btn btn-outline-bg-l mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection