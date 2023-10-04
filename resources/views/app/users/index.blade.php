<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('users.create')}}">Add Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <td scope="col" class="font-bold px-6 py-3">Name</td>
                                    <td scope="col" class="font-bold px-6 py-3">Email</td>
                                    <td scope="col" class="font-bold px-6 py-3">Role</td>
                                    <td scope="col" class="font-bold px-6 py-3">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800">
                                    <td scope="row" class="px-6 py-4 font-medium font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }}{{ $loop->last ? '':', '}}
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-btn-link href="{{ route('users.edit', $user->id)}}">Update
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
