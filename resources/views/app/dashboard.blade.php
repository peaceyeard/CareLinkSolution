<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenant Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    @role('owner')
                        <x-btn-link class="ml-4" href="{{ route('users.index')}}">Users</x-btn-link>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
