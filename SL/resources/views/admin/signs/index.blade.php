<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Word') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        @foreach ($signs as $sign)
            <a href='{{ route('admin.signs.show', $sign->id) }}'>{{ $sign->sign }}</a>
            <br>
        @endforeach

        <a href='{{ route('admin.signs.create') }}'><button type="button" class="btn btn-outline-primary">New Sign</button>
        </a>
    </div>
</x-app-layout>
