
        @extends('layouts.Admin')
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
        <form action="{{ route('poss.update', [$pos->id] ) }}" method="post">
            @csrf
            @method('put')
            <!-- Titre -->
            <div>
                <x-label for="num" :value="__('Num')" />
                <x-input id="num" class="block mt-1 w-full" type="text" name="num" :value="old('num', $pos->num ?? 'Num Not Found' )" required autofocus />
            </div>
              <!-- Titre -->
              <div>
                <x-label for="nom" :value="__('Nom')" />
                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom', $pos->nom)" required autofocus />
            </div>
            
            <!-- Détail -->
            <div class="mt-4">
                <x-label for="adress" :value="__('Adress')" />
                <x-textarea class="block mt-1 w-full" id="adress" name="adress">{{ old('adress', $pos->adress) }}</x-textarea>
            </div>
              <!-- Titre -->
              <div>
                <x-label for="etat" :value="__('Etat')" />
                <x-input id="etat" class="block mt-1 w-full" type="text" name="etat" :value="old('etat', $pos->etat)" required autofocus />
            </div>
            <!-- Tâche accomplie -->
            <div class="block mt-4">
                <label for="state" class="inline-flex items-center">
                    <input id="state" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="state" @if(old('state', $pos->state)) checked @endif>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Pos done') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
        @endsection