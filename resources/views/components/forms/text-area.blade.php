<label>
    <div class="flex items-center justify-between">
        <span class="block text-blue-dark-primary font-semibold text-base font-nunito">
            {{{ $label }}}
        </span>
        <span class="text-gray-primary text-xs font-nunito font-normal">
           <span id="charCount"></span> / {{ $length }} caracteres
        </span>
    </div>
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl"
        rows="5"
        maxlength="{{ $length }}"
    ></textarea>
</label>

<script>
    const textArea = document.getElementById('{{ $id }}')
    const charCountElement = document.getElementById('charCount')

    charCountElement.innerText = '0';

    textArea.addEventListener('input', () => {
        charCountElement.innerText = textArea.value.length
    })
</script>
