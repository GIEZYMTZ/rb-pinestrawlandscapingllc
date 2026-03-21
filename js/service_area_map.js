function initServiceAreaMap() {
  const mapElement = document.getElementById("serviceAreaMap");
  if (!mapElement || !window.google || !window.google.maps) return;

  const centerNC = { lat: 35.7796, lng: -79.3877 };

  const locations = [
    { name: "Raleigh", lat: 35.7796, lng: -78.6382 },
    { name: "Clayton", lat: 35.6507, lng: -78.4564 },
    { name: "Apex", lat: 35.7327, lng: -78.8503 },
    { name: "Pittsboro", lat: 35.7201, lng: -79.1772 },
    { name: "Wake Forest", lat: 35.9799, lng: -78.5097 },
    { name: "Cary", lat: 35.7915, lng: -78.7811 },
    { name: "Charlotte", lat: 35.2271, lng: -80.8431 },
    { name: "Greensboro", lat: 36.0726, lng: -79.7920 }
  ];

  const map = new google.maps.Map(mapElement, {
    center: centerNC,
    zoom: 7,
    mapTypeControl: false,
    streetViewControl: false,
    fullscreenControl: false,
    styles: [
      {
        featureType: "all",
        elementType: "geometry",
        stylers: [{ saturation: -10 }]
      },
      {
        featureType: "poi",
        elementType: "labels",
        stylers: [{ visibility: "off" }]
      },
      {
        featureType: "transit",
        elementType: "labels",
        stylers: [{ visibility: "off" }]
      }
    ]
  });

  const bounds = new google.maps.LatLngBounds();

  locations.forEach((location) => {
    const marker = new google.maps.Marker({
      position: { lat: location.lat, lng: location.lng },
      map,
      title: location.name
    });

    const infoWindow = new google.maps.InfoWindow({
      content: `<div style="font-family: Inter, sans-serif; padding: 4px 6px;">
                  <strong>${location.name}</strong><br />
                  Service Area
                </div>`
    });

    marker.addListener("click", () => {
      infoWindow.open(map, marker);
    });

    bounds.extend(marker.getPosition());
  });

  map.fitBounds(bounds);
}