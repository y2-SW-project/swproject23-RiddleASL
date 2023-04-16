<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Word') }}
        </h2>
    </x-slot>

    <div class="py-3 container d-block">
        {{ $word->word }}
        <br>
        <a href="{{ route('admin.words.edit',$word) }}"><button class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i>Add Sign</button></a>
        <br>
        <a href="{{ route('admin.words.edit',$word) }}"><button class="btn btn-outline-primary">Edit</button></a>
        <form action='{{ route('admin.words.destroy', $word->id) }}' method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>

    
</x-app-layout>
