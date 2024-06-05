<div>
    <label>
        <span class="block text-blue-dark-primary font-semibold text-base font-nunito">Fotos</span>
        <input
            id="photos"
            name="photos[]"
            type="file"
            multiple
            class=""
        />
    </label>
    <div id="photos_list_preview" class="flex">
    </div>
</div>

<script lang="ts">
    const inputFile = document.querySelector('#photos')

    const photosListPreview = document.getElementById('photos_list_preview')

    inputFile.addEventListener('change', (event) => {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.match('image.*')) {
                const reader = new FileReader();
                reader.onload = (function(theFile) {
                    return function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '200px';
                        photosListPreview.appendChild(img);
                    };
                })(file);
                reader.readAsDataURL(file);
            }
        }
    })
</script>
