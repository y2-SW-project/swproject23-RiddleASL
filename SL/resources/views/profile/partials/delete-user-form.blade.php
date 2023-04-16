<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-3 d-flex gap-1 col-4">
            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

            <x-text-input id="password" name="password" type="password" class="form-control rounded"
                placeholder="{{ __('Password') }}" />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="mt-3 flex justify-end">
            <button class="btn btn-outline-danger">
                {{ __('Delete Account') }}
            </button>
        </div>
    </form>
</section>
