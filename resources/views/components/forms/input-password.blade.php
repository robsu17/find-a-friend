<label>
    <span class="block text-blue-dark-primary font-semibold text-base font-nunito">{{ $label }}</span>

    <div class="flex gap-2 px-4 items-center bg-white-light-primary border border-white-light-secondary outline-none w-full mt-1.5 rounded-xl">

        <input class="w-full py-4 bg-transparent outline-none" id="{{ $id }}" name="{{ $name }}" type="password" placeholder="{{ $placeholder }}" />

        <button class="outline-none" type="button" id="switchType">
            <img id="logo-show" src="{{ asset('img/not-show.svg') }}" class="w-6 h-6">
        </button>

    </div>
</label>

<script>
    const input = document.getElementById('{{ $id }}')
    const switchType = document.getElementById('switchType')
    const image = document.getElementById('logo-show')

    let isPasswordType = true

    const imgShow = '{{ asset('img/show.svg') }}'
    const imgNotShow = '{{ asset('img/not-show.svg') }}'

    switchType.addEventListener('click', () => {
        isPasswordType = !isPasswordType

        input.type = isPasswordType ? 'password' : 'text'

        image.src = isPasswordType ? imgNotShow : imgShow
    })
</script>
