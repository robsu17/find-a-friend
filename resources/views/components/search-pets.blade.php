<form action="{{ route('pets.search') }}" method="GET" class="flex items-center">

    <p class="text-base font-nunito font-normal text-white mr-4">Busque um amigo:</p>
    <select id="uf" name="uf" class="px-3 py-4 rounded-2xl bg-transparent border border-white text-white text-xl font-nunito font-bold outline-none">
        @foreach($states as $state)
            <option class="text-black" value="{{ $state['sigla'] }}">{{ $state['sigla'] }}</option>
        @endforeach
    </select>

    <select id="city" name="city" class="w-[280px] h-16 ml-4 rounded-2xl bg-red-secondary text-center text-white text-xl font-nunito font-bold outline-none px-3 py-4">

    </select>

    <button id="loadingBtt" type="button" disabled hidden class="justify-center w-[280px] h-16 ml-4 rounded-2xl bg-red-secondary text-white text-xl font-nunito font-bold outline-none px-3 py-4">
        <img class="animate-spin h-full text-red-400" src="{{ asset('img/loading-animated.svg') }}" alt="loading">
    </button>

    <button
        class="bg-yellow-primary p-4 rounded-2xl ml-4"
        type="submit"
    >
        <img src="{{ asset('img/search.svg') }}" alt="logo">
    </button>
</form>

<script>
    const baseUrl = 'https://servicodados.ibge.gov.br/api/v1/localidades'

    const statesSelect = document.getElementById('uf')
    const citiesSelect = document.getElementById('city')
    const loadingButton = document.getElementById('loadingBtt')

    getCities()

    statesSelect.addEventListener('input', getCities)

    async function getCities() {
        const uf = statesSelect.value

        loadingButton.classList.add('flex')
        citiesSelect.hidden = true

        const response = await axios.get(`${baseUrl}/estados/${uf}/distritos?orderBy=nome`)

        citiesSelect.innerHTML = ''

        response.data.map((item) => {
            citiesSelect.innerHTML += `<option id="${item.id}" class="font-nunito font-semibold text-black bg-white">${item.nome}</option>`
        })

        loadingButton.classList.remove('flex')
        citiesSelect.hidden = false
    }
</script>
