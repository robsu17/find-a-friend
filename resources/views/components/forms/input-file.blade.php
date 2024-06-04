<label>
    <span class="block text-blue-dark-primary font-semibold text-base font-nunito">{{{ $label }}}</span>
    <div class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl">
        <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="file"
            multiple
            class="hidden"
        />
        <div class="flex flex-col justify-center items-center h-[150px]">
            <img src="{{ asset('img/upload.svg') }}" alt="upload-svg">
            <p class="text-blue-dark-primary text-lg font-semibold font-nunito mt-4">Arraste e solte o arquivo</p>
        </div>
    </div>
</label>

<script>

</script>
