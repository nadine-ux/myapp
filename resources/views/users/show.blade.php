<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a user')
        </h2>
    </x-slot>
    <x-tasks-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Name')</h3>
        <p>{{ $admin->name }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('role')</h3>
        <p>{{ $admin->role }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('email')</h3>
        <p>{{ $admin->email }}</p>
        
     
    </x-tasks-card>
</x-app-layout>