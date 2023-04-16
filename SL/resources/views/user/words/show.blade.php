<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $word->word }}
        </h2>
        <h2 class="font-semibold text-l text-gray-800 leading-tight">
            {{ $word->info }}
        </h2>
    </x-slot>

    <div class="py-3 container d-block">
        @foreach ($signs as $sign)
            {{-- {{ json_encode($sign) }} --}}
            
            <div class="pt-5"></div>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/{{ $sign->video }}?playlist={{ $sign->video }}&autoplay=1&loop=1"></iframe> 
            <div name='Definition'>
                <p class='fw-bold'>Definition:</p>
                <p class='ps-5'>{{ $sign->definition }}</p>
            </div>
            <div name='Pronunciation'>
                <p class='fw-bold'>Pronunciation:</p>
                <p class='ps-5'>{{ $sign->pronunciation }}</p>
            </div>

            @if ($sign->extra != null)
            <div name='Extra'>
                <p class='fw-bold'>Extra:</p>
                <p class='ps-5'>{{ $sign->extra }}</p>
            </div>
            @endif
        @endforeach
    </div>

    
</x-app-layout>
