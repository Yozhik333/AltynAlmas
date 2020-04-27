const map = document.querySelector('#map');
if (map) {
  ymaps.ready(function () {
    let myMap = new ymaps.Map('map', {
        center: [43.238772,76.943561],
        zoom: 16.3
      }, {
        searchControlProvider: 'yandex#search'
      }),
      
      myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        hintContent: 'Altyn Almas'
      }, {
        iconLayout: 'default#image',
        iconImageHref:"img/pin.svg",
        // iconImageHref: 'images/samples/pin.svg',
        iconImageSize: [60, 82],
        iconImageOffset: [-30, -90]
      });
    myMap.geoObjects
      .add(myPlacemark);
  });
}
