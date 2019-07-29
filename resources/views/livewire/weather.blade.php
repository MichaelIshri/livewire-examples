<div class="flex justify-center">
    <div class="w-full max-w-md py-10">
        <h1 class="text-center text-6xl pb-4" style="font-family: 'Courgette', cursive;">Weather</h1>
        <div class="flex">
            <input wire:model="city" wire:keydown.enter="search" class="h-12 w-full px-4 rounded shadow focus:outline-none text-center bg-blue-100 text-blue-500" type="text" placeholder="Enter city name then press enter"/>
        </div>
        <div>
            @isset($response->list)
                @foreach ($response->list as $city)
                    <div class="border border-solid border-blue-100 rounded my-4 py-4 px-4 hover:text-blue-900 hover:bg-blue-200">
                        <div class="flex">
                            <img class="mr-4 h-full" src="http://openweathermap.org/img/w/{{ $city->weather[0]->icon }}.png" />
                            <div class="w-full">
                                <h1>{{ $city->name }}, {{ $city->country }}</h1>
                                <h2>{{ $city->weather[0]->main }}, {{ $city->weather[0]->description }}</h2>
                            </div>
                            <div class="w-full">
                                <h1 class="text-4xl text-right">{{ $city->celsius }}&#8451;</h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</div>
