<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Word') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        @foreach ($words as $word)
            <div class="row pb-3">
                <div class="col-12">
                    <a href='{{ route('user.words.show', $word) }}'><button class="btn btn-outline-primary text-black">{{ $word->word }}</button></a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
