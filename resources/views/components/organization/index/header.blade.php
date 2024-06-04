<div class="w-full rounded-2xl bg-blue-dark-primary flex items-center justify-between px-16 py-6">
    <div class="flex items-center gap-4">
        <div>
            <img src="{{ asset('img/dog.svg') }}" alt="logo-dog" />
        </div>
        <div class="">
            <h1 class="text-3xl font-bold font-nunito text-white">{{ $organization['name'] }}</h1>
            <p class="text-base font-light font-nunito text-white">{{ $organization['address'] }}</p>
        </div>
    </div>
    <div>
        <form action="{{ route('organization.index.logout') }}" method="get">
            @csrf

            <button type="submit" class="bg-blue-light-primary p-5 rounded-2xl">
                <img src="{{ asset('img/logout.svg') }}" alt="logout">
            </button>
        </form>
    </div>
</div>
