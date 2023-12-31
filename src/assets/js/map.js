getMap();

async function getMap() {
  // init Map
  const map = L.map("map").setView([49.772491, 4.718851], 18);

  const tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
  }).addTo(map);

  const popup = L.popup();

  function onMapClick(e) {
    popup
      .setLatLng(e.latlng)
      .setContent(`Votre ${e.latlng.toString()}`)
      .openOn(map);
  }

  const data = await fetchMarker();

  // userMarker
  const userIcon = L.icon(data.markerUser);
  const markersData = data.markersData;
  const userMarker = L.marker([0, 0], { icon: userIcon })
    .bindPopup('<p class="text-center">c\'est moi</p>')
    .addTo(map);
  navigator.geolocation.watchPosition(updateLocation);

  // Marker
  markersData.forEach((markerInfo) => {
    const { lat, lon, name, popupContent } = markerInfo;

    const marker = L.marker([lat, lon]).addTo(map).bindPopup(popupContent);
  });

  // Function
  map.on("click", onMapClick);

  function updateLocation(position) {
    const { latitude, longitude } = position.coords;

    userMarker.setLatLng([latitude, longitude]);

    map.setView([latitude, longitude], map.getZoom());
  }
}

// const markersData = [
//     {
//         lat: 49.772491,
//         lon: 4.718851,
//         name: 'Vert Bock',
//         popupContent: '<b>Vert Bock</b><div class="mt-3 h-32 overflow-hidden flex items-center justify-center rounded-lg"><img class="" src="src/assets/img/imgMap1.jpg"></div><div class="mt-2"><span class="font-semibold">Adresse :</span>17 Rue Irénée Carré, 08000 Charleville-Mézières</div><div class="mt-2"><div data-selected=true class="text-xs bg-white flex items-center w-fit py-1 px-3 mt-2 leading-none rounded-xl data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white transition-all duration-200 cursor-pointer">Bar</div></div>',
//     },
//     {
//         lat: 49.740405,
//         lon: 4.724062,
//         name: 'Promo Cash',
//         popupContent: '<b>Promo Cash</b><br/>I am a popup.',
//     },
//     {
//         lat: 49.772692,
//         lon: 4.718926,
//         name: 'Chez Nono',
//         popupContent: '<b>Chez Nono</b><div class="mt-3 h-32 overflow-hidden flex items-center justify-center rounded-lg"><img class="" src="src/assets/img/imgMap3.jpg"></div><div class="mt-2"><span class="font-semibold">Adresse :</span>17 Rue Irénée Carré, 08000 Charleville-Mézières</div><div class="mt-2"><div data-selected=true class="text-xs bg-white flex items-center w-fit py-1 px-3 mt-2 leading-none rounded-xl data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white transition-all duration-200 cursor-pointer">Restaurant</div></div>',
//     },
//     {
//         lat: 49.772742,
//         lon: 4.718698,
//         name: 'Jessy\'s Factory',
//         popupContent: '<b>Jessy\'s Factory</b><div class="mt-3 h-32 overflow-hidden flex items-center justify-center rounded-lg"><img class="" src="src/assets/img/imgMap4.jpg"></div><div class="mt-2"><span class="font-semibold">Adresse :</span>19 Rue Irenée Carré, 08000 Charleville-Mézières</div><div class="mt-2"><div data-selected=true class="text-xs bg-white flex items-center w-fit py-1 px-3 mt-2 leading-none rounded-xl data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white transition-all duration-200 cursor-pointer">Coffee Shop</div></div>',
//     },
// ];

async function fetchMarker() {
  try {
    const response = await fetch("src/assets/datas/markerMap.json");

    if (!response.ok) {
      throw new Error("Erreur réseau");
    }

    const data = await response.json(); // Convertir la réponse en JSON
    // Faire quelque chose avec les données récupérées
    return data;
  } catch (error) {
    console.error("Erreur:", error);
  }
}
