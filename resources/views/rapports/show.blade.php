<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a rapport')
        </h2>
    </x-slot>
    <x-tasks-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('ID')</h3>
        <p>{{ $rapport->id }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('DATE')</h3>
        <p>{{ $rapport->date }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('etat')</h3>
        <p>{{ $rapport->etat }}</p>
        
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('description')</h3>
        <p>{{ $rapport->description  }}</p>
        
     
    </x-tasks-card>
</x-app-layout>