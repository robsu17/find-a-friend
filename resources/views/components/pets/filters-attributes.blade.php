<div class="flex flex-col gap-6 text-white p-6">
    <h1 class="text-xl font-nunito font-extrabold text-white">Filtros</h1>
    @foreach($options as $option)
        <x-forms.select
            :id="$option['id']"
            :name="$option['name']"
            :label="$option['label']"
            :options="$option['options']"
            labelColor="#fff"
        />
    @endforeach
</div>
