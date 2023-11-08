<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
            <x-btn-link class="ml-auto float-right" href="{{ route('tasks.create')}}">Add Task</x-btn-link>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounder-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto mt-6">
                        <table class="table-auto border-collapse w-full">
                            <thead>
                                <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                                    <td class="px-4 py-2 font-bold bg-gray-200 " style="background-color:#f8f8f8">Title</td>
                                    <td class="px-4 py-2 font-bold " style="background-color:#f8f8f8">Status</td>
                                    <td class="px-4 py-2 font-bold " style="background-color:#f8f8f8">Client</td>
                                    <td class="px-4 py-2 font-bold " style="background-color:#f8f8f8">Nurse</td>
                                    <td class="px-4 py-2 font-bold " style="background-color:#f8f8f8">Action</td>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-normal text-gray-700">
                                @foreach ($tasks as $task)
                                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                        <td class="px-4 py-4">{{ $task->name  }}</td>
                                        <td class="px-4 py-4">Active</td>
                                        <td class="px-4 py-4">John Doe</td>
                                        <td class="px-4 py-4">Not assigned</td>
                                        <td class="px-4 py-4">
                                            <a href="{{ route('tasks.edit', $task) }}" class="text-indigo-600 hover:text-indigo-900">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
                        {{ $tasks->links() }}
                    </div>
                  
                    <style>
                        thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
                        thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}
                        
                        tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
                        tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}
                    </style>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>