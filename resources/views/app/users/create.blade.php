<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Tenant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{ route('tenants.store') }}">
                        @csrf
            
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
            
                        <!-- Domain Name -->
                        <div class="mt-4">
                            <x-label for="domain_name" :value="__('Domain Name')" />
            
                            <x-input id="domain_name" class="block mt-1 w-full" type="text" name="domain_name" :value="old('domain_name')" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
