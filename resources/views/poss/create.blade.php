@extends('layouts.admin')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un Pos </h4>
                <p class="card-description"> Ajouter un Pos  </p>
                   <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div   class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('poss.store') }}" method="post">
@csrf
            <!-- Titre -->
            <div>
                <x-label for="num" :value="__('Num')" />
                <x-input id="num" class="block mt-1 w-full" type="text" name="num" :value="old('num')" required autofocus />
</div>
             <!-- Name-->
             
             <div>
                <x-label for="nom" :value="__('Nom')" />
                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
</div>
            <!-- adress -->
            <div class="mt-4">
                <x-label for="adress" :value="__('Adress')" />
                <x-textarea class="block mt-1 w-full" id="adress" name="adress">{{ old('adress') }}</x-textarea>
            </div>
                   <!-- etat -->
                   <div>
                <x-label for="etat" :value="__('Etat')" />
                <x-input id="etat" class="block mt-1 w-full" type="text" name="etat" :value="old('etat')" required autofocus />
</div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
            </div>
        </div>
    </div>
@endsection

