<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4 text-lg font-medium">{{ __("You're logged in!") }}</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex flex-wrap gap-4">
                        <a href="{{ route('admin.messages') }}"
                           class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 transition ease-in-out duration-150 shadow-md">
                           <i class="fas fa-envelope mr-2"></i> View My Messages
                        </a>

                        <a href="http://127.0.0.1:8000/students" target="_blank"
                           class="inline-flex items-center px-6 py-3 bg-teal-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 transition ease-in-out duration-150 shadow-md">
                           <i class="fas fa-user-graduate mr-2"></i> Run Student System
                        </a>

                        <a href="http://127.0.0.1:8001/bank" target="_blank"
                           class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition ease-in-out duration-150 shadow-md">
                           <i class="fas fa-university mr-2"></i> Run Banking System
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
