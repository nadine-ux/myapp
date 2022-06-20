
      @extends('layouts.Administrateur')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un utilisateurs </h4>
                <p class="card-description"> Ajouter un user  </p>
                   <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div   class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('users.update', [$user->id] ) }}" method="post">
            @csrf
            @method('put')
            <!-- Titre -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name ?? 'Num Not Found' )" required autofocus />
            </div>
            <div>
                <x-label for="role" :value="__('Role')" />
                <x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role', $user->role ?? 'Num Not Found' )" required autofocus />
            </div>
              <!-- Titre -->
              <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email', $user->email)" required autofocus />
            </div>
           
              <!-- Titre -->
              <div>
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password', $user->password)" required autofocus />
            </div>
            <!-- Tâche accomplie -->
            <div class="block mt-4">
                <label for="state" class="inline-flex items-center">
                    <input id="state" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="state" @if(old('state', $user->state)) checked @endif>
                    <span class="ml-2 text-sm text-gray-600">{{ __('tache done') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    @endsection