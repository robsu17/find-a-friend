<label>
    <span
        class="block text-blue-dark-primary font-semibold text-base font-nunito"
        style="color: {{ $labelColor }}"
    >
        {{ $label }}
    </span>
    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="bg-white-light-primary border text-base font-nunito font-extrabold border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl text-blue-dark-primary"
    >
        @foreach($options as $option)
            <option
                class="text-base font-nunito font-extrabold"
                value="{{ strtolower($option['value']) }}"
            >
                {{ ucfirst($option['text']) }}
            </option>
        @endforeach
    </select>
</label>
