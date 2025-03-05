<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Strona główna') }}
        </h2>
    </x-slot> --}}


    <div class="font-[sans-serif]">
        <div class="h-[600px] flex fle-col items-center justify-center py-2 px-4">
          <div class="grid md:grid-cols-2 items-center gap-6 max-w-5xl max-md:max-w-md w-full">
            <div>
              <h2 class="lg:text-4xl text-3xl font-extrabold lg:leading-[55px] text-gray-800">
                Fundacja Dzieło Nowego Tysiąclecia 
              </h2>
              <p class="text-sm mt-6 text-gray-800">Budujemy żywy pomnik Jana Pawła II, wspierając młodych, dając im szansę na edukację i rozwój zgodny z jego wartościami.</p>
              <p class="text-sm mt-12 text-gray-800">Nie masz konta? <a href="{{ route('register') }}" class="text-sky-600 font-semibold hover:underline ml-1">Zarejestruj się</a></p>
            </div>
  
            <form method="POST" action="{{ route('login') }}" class="max-w-md md:ml-auto w-full">
                @csrf
              <h3 class="text-gray-800 text-3xl font-extrabold mb-8">
                Logowanie
              </h3>
  
              <div class="space-y-4">
                <div>
                  <input name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md focus:border-sky-700" placeholder="Email" />
                </div>
                <div>
                  <input name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm text-gray-800 px-4 py-3.5 rounded-md focus:border-sky-700" placeholder="Hasło" />
                </div>
                <div class="flex flex-wrap items-center justify-between gap-4">
                  <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-sky-600 focus:ring-sky-500 border-gray-300 rounded" />
                    <label for="remember_me" class="ml-3 block text-sm text-gray-800">
                      Zapamiętaj mnie
                    </label>
                  </div>
                  <div class="text-sm">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sky-600 hover:text-sky-500 font-semibold">
                      Zapomniałeś hasła?
                    </a>
                    @endif
                  </div>
                </div>
              </div>
  
              <div class="!mt-8">
                <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-sky-600 hover:bg-sky-700 focus:outline-none">
                  Zaloguj
                </button>
              </div>
 
            </form>
          </div>
        </div>
      </div>

      

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
