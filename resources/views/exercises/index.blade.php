<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Baza Ćwiczeń') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-medium">Twoje ćwiczenia</h3>
                    <a href="{{ route('exercises.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        + Dodaj ćwiczenie
                    </a>
                </div>

                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="border-b dark:border-gray-700">
                        <th class="py-4 px-2">Nazwa ćwiczenia</th>
                        <th class="py-4 px-2">Grupa mięśniowa</th>
                        <th class="py-4 px-2 text-right">Akcje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($exercises as $exercise)
                        <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <td class="py-4 px-2">{{ $exercise->name }}</td>
                            <td class="py-4 px-2">
                                    <span class="bg-gray-200 dark:bg-gray-600 px-2 py-1 rounded text-sm">
                                        {{ $exercise->muscle_group }}
                                    </span>
                            </td>
                            <td class="py-4 px-2 text-right">
                                <a href="#" class="text-blue-400 hover:text-blue-600 mr-2">Edytuj</a>
                                <button class="text-red-400 hover:text-red-600">Usuń</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @if($exercises->isEmpty())
                    <p class="text-center py-10 text-gray-500">Brak ćwiczeń w bazie. Dodaj swoje pierwsze ćwiczenie!</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
