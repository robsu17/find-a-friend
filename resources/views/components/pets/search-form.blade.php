<form class="flex items-center">

    <p class="text-base font-nunito font-normal text-white mr-4">Busque um amigo:</p>
    <select class="px-3 py-4 rounded-2xl bg-transparent border border-white text-white text-xl font-nunito font-bold outline-none">
        <option class="text-black">PE</option>
        <option class="text-black">CE</option>
        <option class="text-black">SP</option>
    </select>
    <select class="w-[280px] ml-4 rounded-2xl bg-red-secondary text-center text-white text-xl font-nunito font-bold outline-none px-3 py-4">
        <option class="bg-white text-black">Recife</option>
        <option class="bg-white text-black">Fortaleza</option>
        <option class="bg-white text-black">Sobral</option>
    </select>
    <button
        class="bg-yellow-primary p-4 rounded-2xl ml-4"
        type="submit"
    >
        <img src="{{ asset('img/search.svg') }}" alt="logo">
    </button>
</form>
