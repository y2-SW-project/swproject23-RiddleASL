@extends('layouts.app')

@section('content')
    <div class="py-3 container text-white">
        <div class="row">
            <div class="col-12">
                <form  method="POST" action="{{ route('signs.store') }}">
                    @csrf
                    <div class="col-12">
                        <label for="video">Youtube URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded" name='video' id="video" placeholder="Please enter a youtube url... (www.youtube.com/watch?v=aaaaaaaaaaa)" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-5">
                            <label for="definition">Definition <span class="text-danger">*</span></label>
                            <input type="text" height='15rem'class="form-control rounded" name='definition' id="definition" placeholder="Please enter a definition..." required>
                        </div>
                        <div class="col-5">
                            <label for="pronunciation">Pronuncitation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name='pronunciation' id="pronunciation" placeholder="Please enter a pronunciation..." required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="extra">Extra</label>
                        <input type="text" class="form-control rounded" name='extra' id="extra" placeholder="Please enter a extra...">
                    </div>
                    <input type="hidden" name="word_id" value='{{ $word }}'>
                    <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection