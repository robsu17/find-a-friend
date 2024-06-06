@php
$options = config('selects.options');
@endphp

<form action="{{ route('organization.index.create.pet') }}" method="POST" class="bg-white px-20 py-16 rounded-xl" enctype="multipart/form-data">
    @csrf

    <h1 class="border-b border-gray-300 pb-5 font-nunito font-extrabold text-4xl text-blue-dark-primary">
        Adicione um pet
    </h1>
    <div class="flex flex-col gap-6 mt-10">
        <x-forms.input id="name" name="name" label="Nome" placeholder="" type="text" />
        <x-forms.text-area id="about" name="about" label="Sobre" length="300" />

        @foreach($options as $option)
            <x-forms.select
                :id="$option['id']"
                :name="$option['name']"
                :label="$option['label']"
                :options="$option['options']" />
        @endforeach

        <x-forms.input-file />

        <div class="mt-10">
            <h1 class="font-nunito font-extrabold text-3xl text-blue-dark-primary pb-2 border-b border-white-light-secondary mb-6">Requisitos para adoção</h1>

            <x-forms.input-append />

        </div>

        <button type="submit" class="bg-yellow-primary p-5 rounded-xl text-blue-dark-primary text-lg font-extrabold font-nunito">
            Confirmar
        </button>
    </div>
</form>
