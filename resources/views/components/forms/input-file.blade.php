<div>
    <label>
        <span class="block text-blue-dark-primary font-semibold text-base font-nunito">Fotos</span>
        <input
            id="photos"
            name="photos[]"
            type="file"
            multiple
            class=""
            accept="image/*"
        />
    </label>
    <ul id="files_list" class="space-y-2 mt-4">
    </ul>
</div>

<script>
    const inputFile = document.querySelector('#photos')

    const files_list = document.getElementById('files_list')

    inputFile.addEventListener('change', (event) => {
        const files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            if (file.type.match('image.*')) {
                const reader = new FileReader();
                reader.onload = (function(theFile) {
                    return function(e) {
                        files_list.innerHTML += `
                            <li class="flex items-center justify-between border border-gray-300 p-4 rounded-xl">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('img/arquive.svg') }}" alt="arquive" />
                                    <span class="text-blue-dark-primary">${file.name}</span>
                                </div>
                                <button onclick="remove(${file.name})" type="button">
                                    <img src="{{ asset('img/square.svg') }}" alt="close" />
                                </button>
                            </li>
                        `
                    };
                })(file);
                reader.readAsDataURL(file);
            }
        }
    })

    function remove(e) {
        console.log(e)
    }
</script>
