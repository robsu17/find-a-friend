<label>
    <span class="block text-blue-dark-primary font-semibold text-base font-nunito">{{{ $label }}}</span>
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        value="{{ @old($id) }}"
    />
</label>
