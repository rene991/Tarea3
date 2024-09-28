// Ejemplo básico para mostrar un mapa de Google Maps en la sección de Contacto
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}

// Llama a esta función cuando se cargue la página
window.onload = function() {
    initMap();
};
