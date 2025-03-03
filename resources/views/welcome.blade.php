<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot>

    <div class="m-6 py-6 px-4 bg-white rounded-md w-full tracking-wide text-center">
        <h2>Witamy na stronie głównej</h2>


        <div class="m-4">
            <ol class="text-sky-700">
                <li>SuperAdmin</li>
                <li>Admin</li>
                <li>Koordynatorzy</li>
                <li>Biuro</li>
                <li>Gość</li>
            </ol>
        </div>

        <button type="button" class="text-white bg-gradient-to-r from-cyan-700 to-blue-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            <a href="{{ route('login') }}">Zaloguj się</a></button>

        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
            <a href="{{ route('register') }}">Załóż konto </a>
        </span>
        </button>

    </div>


</x-app-layout>
