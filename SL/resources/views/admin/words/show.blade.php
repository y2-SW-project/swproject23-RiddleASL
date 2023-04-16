@extends('layouts.app')

@section('content')
    <div class="container text-white">
        <h1 class=" text-decoration-underline fw-bold">{{ $word->word }}</h1>
        @if ($word->info != null)
            <h2 class="ps-3">| {{ $word->info }}</h2>            
        @endif
        <hr class="rounded border border-2 my-4">
        @foreach ($signs as $sign)
            <iframe width="420" height="315"
                src="https://www.youtube.com/embed/{{ $sign->video }}?playlist={{ $sign->video }}&autoplay=1&loop=1"></iframe>
            <div name='Definition'>
                <p class='fw-bold'>Definition:</p>
                <p class='ps-5'>| {{ $sign->definition }}</p>
            </div>
            <div name='Pronunciation'>
                <p class='fw-bold'>Pronunciation:</p>
                <p class='ps-5'>| {{ $sign->pronunciation }}</p>
            </div>
            @if ($sign->extra != null)
                <div name='Extra'>
                    <p class='fw-bold'>Extra:</p>
                    <p class='ps-5'>| {{ $sign->extra }}</p>
                </div>
            @endif
            @if (Auth::check())
                @if (Auth::user()->isAdmin)
                    <div class="pt-3 d-flex gap-2">
                        <?php $edit = json_encode($sign); ?>
                        <a href="{{ route('signs.edit', $sign->id) }}"><button class="btn btn-outline-primary">Edit
                                Sign</button></a>
                        <form action='{{ route('signs.destroy', $sign->id) }}' method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete Sign</button>
                        </form>
                    </div>
                @endif
            @endif
        @endforeach
        <p>Uploaded by: {{ $user->name }}</p>
        <p>Updated at: {{ $word->updated_at->diffForHumans() }}</p>
        <br>
        @if (Auth::check())
            @if (Auth::user()->isAdmin)
                <a href="{{ route('signs.create', ['word_id' => $word]) }}"><button class="btn btn-outline-primary"><i
                            class="bi bi-plus-circle"></i>Add Sign</button></a>
                <br>
                <div class='pt-3 d-flex gap-2'>
                    <a href="{{ route('words.edit', $word) }}"><button class="btn btn-outline-primary">Edit
                            Word</button></a>
                    <form action='{{ route('words.destroy', $word->id) }}' method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Delete Word</button>
                    </form>
                </div>
            @endif
        @endif
    </div>
@endsection
