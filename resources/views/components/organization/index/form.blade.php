@php
$options = config('selects.options');
@endphp

<form class="bg-white px-20 py-16 rounded-xl">
    <h1 class="border-b border-gray-300 pb-5 font-nunito font-extrabold text-4xl text-blue-dark-primary">
        Adicione um pet
    </h1>
    <div class="flex flex-col gap-6 mt-10">
        <x-forms.input id="name" name="name" label="Nome" placeholder="" type="text" />
        <x-forms.text-area id="about" name="about" label="Sobre" length="300" />
        @foreach($options as $option)
            <x-forms.select :id="$option['id']" :name="$option['name']" :label="$option['label']" :options="$option['options']" />
        @endforeach
        <x-forms.input-file label="Fotos" name="fotos" id="fotos" />
    </div>
</form>
