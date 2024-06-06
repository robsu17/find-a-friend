<form class="w-[400px] h-full" action="{{ route('pets.search') }}" method="GET">
    <div class="flex flex-col justify-end gap-10 min-h-[240px] bg-red-secondary p-8">
        <div>
            <img src="{{ asset('img/logo.svg') }}">
        </div>
        <x-pets.filters-city :states="$states" />
    </div>
    <div class="bg-red-primary">
        <x-pets.filters-attributes :options="$options" />
    </div>
</form>
