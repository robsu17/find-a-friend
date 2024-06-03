<div class="p-6 max-w-[500px]">
    <h1 class="text-blue-dark-primary text-center font-bold text-6xl font-nunito mb-10">{{ $title }}</h1>
    @if($errors->any())
        <ul class="my-4 rounded-xl space-y-2">
            @foreach($errors->all() as $error)
                <li class="border border-red-700 bg-red-primary-light p-2 rounded-xl text-white-light-primary">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {{ $slot }}
</div>
