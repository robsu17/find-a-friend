<label>
    <span class="block text-blue-dark-primary font-semibold text-base font-nunito">Requisitos</span>
    <input
        id="requirement"
        class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl"
        type="text"
    />
    <input id="requirement_values" name="requirement_values" type="text" class="hidden" />
    <button id="add_requirement" class="p-6 bg-red-primary/10 w-full flex justify-center mt-4 rounded-xl border-2 border-dashed border-red-primary" type="button">
        <img src="{{ asset('img/append.svg') }}" alt="append" />
    </button>
    <ul id="requirement_list" class="space-y-3 mt-4"></ul>
</label>

<script>
    const inputRequirement = document.getElementById('requirement')
    const requirementsValues = document.getElementById('requirement_values')
    const buttonAddRequirement = document.getElementById('add_requirement')
    const requirementList = document.getElementById('requirement_list')

    buttonAddRequirement.addEventListener('click', () => {
        requirementList.innerHTML += `
            <li id="${inputRequirement.value}" class="p-4 border border-gray-300 rounded-xl">${inputRequirement.value}</li>
        `

        if (inputRequirement.value) {
            if (requirementsValues.value) {
                requirementsValues.value += ',' + inputRequirement.value;
            } else {
                requirementsValues.value = inputRequirement.value;
            }
        }

        inputRequirement.value = ''
    })
</script>
