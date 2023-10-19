mapboxgl.accessToken =
  "pk.eyJ1Ijoic2FoZXIxNSIsImEiOiJjbG5tOXFyZWcwbmNzMmtwYm93MmRoajA5In0.jQniazbkNYS4v65a0tl6EA"

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
})

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
  setupMap([-2.24, 53.48])
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15

  })

  const nav = new mapboxgl.NavigationControl()
  map.addControl(nav)

  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  })

  map.addControl(directions, "top-left")
}

let sp=document.getElementById('span')
let chil = document.querySelector('h1')
sp.innerHTML=chil.innerHTML
console.log(sp.innerHTML)



