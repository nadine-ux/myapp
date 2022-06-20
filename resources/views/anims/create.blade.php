
@extends('layouts.admin')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ajouter un Animateur </h4>
                <p class="card-description"> Ajouter un Animateur   </p>
                   <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div   class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('anims.store') }}" method="post">
@csrf
     
             <!-- Name-->
             
             <div>
                <x-label for="nom" :value="__('Nom')" />
                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
</div>
       <!-- Titre -->
       <div>
                <x-label for="prenom" :value="__('Prenom')" />
                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
</div>
                  <!-- Titre -->
                  <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
</div>
                   <!-- etat -->
                   <div>
                <x-label for="telephone" :value="__('Telephone')" />
                <x-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" required autofocus />
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