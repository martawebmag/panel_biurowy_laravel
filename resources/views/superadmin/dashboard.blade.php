<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel SuperAdmina') }}
        </h2>
    </x-slot>

    <div class="m-6 py-6 px-4 bg-white rounded-md tracking-wide">
        <h2>Zarządzanie użytkownikami</h2>

        <div class="m-4">
            <ol class="text-sky-700 list-disc">
                <li>Zarządzanie dostępami</li>
                <li>Zmiany w bazie danych</li>
                <li>Zarządzanie użytkownikami</li>
            </ol>
        </div>

    </div>

</x-app-layout>