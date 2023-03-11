// Initiation de la carte
var map = L.map('map').setView([14.15947, -16.07196], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
// intégration du marqueur
var marker = L.marker([14.15947, -16.07196]).addTo(map);

var popup = L.popup()
    .setLatLng([14.15947, -16.07196])
    .setContent("Lycée Valdiodio Ndiaye de Kaolack")
    .openOn(map);

    