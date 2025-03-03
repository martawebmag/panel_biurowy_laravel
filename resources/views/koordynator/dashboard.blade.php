<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Koordynatora') }}
        </h2>
    </x-slot>

    <div class="m-6 py-6 px-4 bg-white rounded-md tracking-wide">
        <h2>Pobieranie raportów w Excelu</h2>

        <div class="m-4">
            <ol class="text-sky-700 list-disc">
                <li>Pobieranie raportów ze swojej diecezji</li> 
                <li>Podział na uczniów, maturzystów, studentów</li>
                <li>Możliwość wydruku raportu</li>
            </ol>


            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Zapisani na obozy w 2025 roku</h2>
            
                <div class="space-y-3">
                    <p class="flex items-center justify-between text-gray-700">
                        <span class="font-medium">Uczniowie</span>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                            Pobierz raport
                        </button>
                    </p>
            
                    <p class="flex items-center justify-between text-gray-700">
                        <span class="font-medium">Maturzyści</span>
                        <button class="px-4 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition">
                            Pobierz raport
                        </button>
                    </p>
            
                    <p class="flex items-center justify-between text-gray-700">
                        <span class="font-medium">Studenci</span>
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg shadow-md hover:bg-purple-700 transition">
                            Pobierz raport
                        </button>
                    </p>
                </div>
            </div>
            


        </div>

    </div>
</x-app-layout>


