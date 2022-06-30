<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Voir un Pos ')
        </h2>
    </x-slot>
    <x-tasks-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Nom_POS')</h3>
        <p>{{ $pos->Nom_POS }}</p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Adresse')</h3>
        <p>{{ $pos->Adresse }}</p>

        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Statut')</h3>
        <p>{{ $pos->Statut }}</p>


        <h3 class="font-semibold text-xl text-gray-800">@lang('telephone')</h3>
        <p>{{ $pos->telephone }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('State')</h3>
        <p>
            @if ($pos->state)
                La tâche a été accomplie !
            @else
                La tâche n'a pas encore été accomplie.
            @endif
        </p>

    </x-tasks-card>
</x-app-layout>
