<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Voir un Pos ')
        </h2>
    </x-slot>
    <x-tasks-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Num')</h3>
        <p>{{ $pos->num}}</p>
        
        <h3 class="font-semibold text-xl text-gray-800">@lang('Nom')</h3>
        <p>{{ $pos->nom}}</p>

        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Adress')</h3>
        <p>{{ $pos->adress }}</p>

        
        <h3 class="font-semibold text-xl text-gray-800">@lang('Etat')</h3>
        <p>{{ $pos->etat}}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('State')</h3>
        <p>
          @if($pos->state)
            La tâche a été accomplie !
          @else
            La tâche n'a pas encore été accomplie.
          @endif
        </p>
     
    </x-tasks-card>
</x-app-layout>