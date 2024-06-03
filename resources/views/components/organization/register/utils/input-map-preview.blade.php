<div>
    <label>
        <span class="block text-blue-dark-primary font-semibold text-base font-nunito">Endereço</span>
        <input
            id="address"
            name="address"
            class="bg-white-light-primary border border-white-light-secondary outline-none p-4 w-full mt-1.5 rounded-xl"
            type="text"
            placeholder="Rua do meio"
        />
    </label>

    <div id="map"
         class="w-full h-[200px] mt-6 rounded-xl border border-dashed border-white-light-secondary overflow-hidden"></div>
</div>

<script>
    const inputAdress = document.getElementById('address')

    let latitude
    let longitude
    let map = L.map('map')
    let marker = L.marker([0, 0]).addTo(map);

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;

                map.setView([latitude, longitude], 13);
                marker.setLatLng({ lat: latitude, lng: longitude });

                reverseGeocode({ lat: latitude, lng: longitude })
            }, showError);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("Admin denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
    }

    getLocation()

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    map.on('click', function (e) {
        marker.setLatLng(e.latlng);
        reverseGeocode(e.latlng);
    });


    async function reverseGeocode(latlng) {

        var url = 'https://nominatim.openstreetmap.org/reverse?format=json&lat=' + latlng.lat + '&lon=' + latlng.lng + '&zoom=18&addressdetails=1';

        try {
            const response = await axios.get(url)
            const {address} = response.data

            var addressContentPoPup = `<b> ${address.road}, ${address.suburb} -${address.city}, ${address.state} </b>`

            inputAdress.value = `${address.road}, ${address.suburb} - ${address.city}, ${address.state}`

            marker.bindPopup(addressContentPoPup).openPopup();

        } catch (error) {
            console.error('Erro ao fazer a requisição')
        }
    }


</script>
