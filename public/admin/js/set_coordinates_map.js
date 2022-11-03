
let map_center_x = 55.753994;
let map_center_y = 37.622093;
let placemark_x = false;
let placemark_y = false;

ymaps.ready(map_init);

function map_init() {
    var myMap, myPlacemark;

    myMap = new ymaps.Map('coordinate_map', {
        center: [map_center_x, map_center_y],
        zoom: 10,
        controls: ['zoomControl', 'typeSelector']
    });

    var searchControl = new ymaps.control.SearchControl({
        options: {
            float: 'left',
            floatIndex: 100,
            noPlacemark: true
        }
    });
    myMap.controls.add(searchControl);


    // Слушаем клик на карте.
    myMap.events.add('click', function (e) {
        var coords = e.get('coords');

        // Если метка уже создана – просто передвигаем ее.
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);

        } else { // Если нет – создаем.

            myPlacemark = createPlacemark(coords);
            myMap.geoObjects.add(myPlacemark);
            // Слушаем событие окончания перетаскивания на метке.
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
        getAddress(coords);

        setCoordsInput(coords);
    });

    if(placemark_x && placemark_y){
        myPlacemark = createPlacemark([placemark_x, placemark_y]);
        myMap.geoObjects.add(myPlacemark);
    }

    // Создание метки.
    function createPlacemark(coords) {
        return new ymaps.Placemark(coords, {
            iconCaption: 'поиск...'
        }, {
            preset: 'islands#violetDotIconWithCaption',
            draggable: true
        });
    }

    // Определяем адрес по координатам (обратное геокодирование).
    function getAddress(coords) {
        myPlacemark.properties.set('iconCaption', 'поиск...');
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0),
                address = firstGeoObject.getAddressLine();

            myPlacemark.properties
                .set({
                    // Формируем строку с данными об объекте.
                    iconCaption: [
                        // Название населенного пункта или вышестоящее административно-территориальное образование.
                        firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                        // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                        firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                    ].filter(Boolean).join(', '),
                    // В качестве контента балуна задаем строку с адресом объекта.
                    balloonContent: address
                });
        });
    }
}

//Функция для передачи полученных значений в форму
function setCoordsInput (coords){
    var new_coords = [coords[0].toFixed(8), coords[1].toFixed(8)];
    document.getElementById("coordinate").value = new_coords[0] +' '+ new_coords[1];
}

function setMapCenter(x, y){
    map_center_x = x;
    map_center_y = y;
}

function setPlacemark(x, y){
    placemark_x = x;
    placemark_y = y;
}

