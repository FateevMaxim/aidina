<x-app-layout>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                @if(session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">{{ session()->get('message') }}
                    </div>
                @endif
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-3 h-22 pl-6 pr-6 pb-4">
                        <div class="grid grid round_border min_height grid-cols-1 p-4 relative">
                            <div>
                                 <span>
                                Пункт приёма
                                </span>
                                <h3>Киргизия</h3>
                            </div>
                            <div class="absolute p-4 bottom-0">
                                <span>Количество зарегистрированных трек кодов за сегодня</span>
                                <h3>{{ $count }}</h3>
                            </div>

                        </div>
                        <div class="grid grid-cols-1 p-4 min_height round_border relative">
                            <div class="grid mx-auto">
                                <div id="qrcode"></div>
                                <b class="mx-auto" style="margin-top: -45px;">Приём треков</b>
                            </div>
                            <form method="POST" action="{{ route('add-stock-product') }}" id="getInfoForm">
                                <div class="w-full">
                                    <x-input-label for="track_code" :value="__('Трек код')" />
                                    @csrf
                                    <x-text-input id="track_code" class="block mt-1 w-full border-2 border-sky-400" type="text" name="track_code" autofocus />
                                </div>
                            <div class="absolute w-full bottom-0 p-4">
                                    <div>
                                        <div>
                                            @csrf
                                            <x-primary-button class="mx-auto w-full">
                                                {{ __('Загрузить') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
</x-app-layout>
