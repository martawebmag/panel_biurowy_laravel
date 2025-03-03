<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Admina') }}
        </h2>
    </x-slot>

    <div class="m-6 py-6 px-4 bg-white rounded-md tracking-wide">
        <h2>Zarządzanie bazą danych stypendystów zapisanych na obozy</h2>

        <div class="m-4">
            <ol class="text-sky-700 list-disc">
                <li>Wyszukiwarka</li>
                <li>Zmiany w bazie danych</li>
                <li>Zatwierdzanie zmian</li>
                <li>Usuwanie rekordów z bazy</li>
                <li>Dodawanie nowego stypendysty</li>
                <li>Możliwość wydruku</li>
            </ol>
        </div>

    </div>

</x-app-layout>


