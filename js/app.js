document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map').setView([10.83784, 106.68591], 12);

    // Các lớp bản đồ nền
    const osmTileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    });

    const satelliteTileLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenTopoMap contributors'
    });

    // Thêm lớp bản đồ nền mặc định vào bản đồ
    osmTileLayer.addTo(map);

    // Tạo lớp WMS cho landmarks
    const wmsLayer = L.tileLayer.wms('http://localhost:8080/geoserver/tourism/wms', {
        layers: 'tourism:tour',
        format: 'image/png',
        transparent: true,
        version: '1.1.0',
        attribution: ""
    });

    // Tạo một nhóm các marker
    const markers = L.layerGroup();

    // Thêm các marker từ dữ liệu GeoJSON
    fetch('http://localhost:8080/geoserver/tourism/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=tourism:tour&outputFormat=application/json')
        .then(response => response.json())
        .then(data => {
            L.geoJSON(data, {
                onEachFeature: function (feature, layer) {
                    layer.bindPopup(Object.keys(feature.properties).slice(0, 5).map(key => `${key}: ${feature.properties[key]}`).join('<br>'));
                },
                pointToLayer: function (feature, latlng) {
                    return L.marker(latlng);
                }
            }).addTo(markers);
        });

    // Thêm lớp WMS và nhóm marker vào bản đồ
    wmsLayer.addTo(map);
    markers.addTo(map);

    // Điều khiển lớp bản đồ
    const baseLayers = {
        "OpenStreetMap": osmTileLayer,
        "Satellite": satelliteTileLayer
    };

    const overlays = {
        "Landmarks Layer": wmsLayer,
        "Landmarks Markers": markers
    };

    L.control.layers(baseLayers, overlays).addTo(map);

    // Bắt sự kiện tileerror để kiểm tra lỗi khi tải lớp WMS
    wmsLayer.on('tileerror', function (error, tile) {
        console.error('WMS Tile Error:', error);
    });

    // Xử lý sự kiện nhấp chuột để thực hiện GetFeatureInfo
    map.on('click', function (e) {
        const url = getFeatureInfoUrl(map, wmsLayer, e.latlng, {
            'info_format': 'application/json',
            'propertyName': 'name,description,attribute1,attribute2,attribute3'
        });

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.features.length > 0) {
                    const properties = data.features[0].properties;
                    const popupContent = Object.keys(properties).slice(0, 5).map(key => `${key}: ${properties[key]}`).join('<br>');
                    L.popup()
                        .setLatLng(e.latlng)
                        .setContent(popupContent)
                        .openOn(map);Ss
                }
            })
            .catch(error => console.error('Error fetching GetFeatureInfo data:', error));
    });

    function getFeatureInfoUrl(map, layer, latlng, params) {
        const point = map.latLngToContainerPoint(latlng, map.getZoom());
        const size = map.getSize();

        const baseParams = {
            request: 'GetFeatureInfo',
            service: 'WMS',
            srs: 'EPSG:4326',
            styles: '',
            transparent: true,
            version: '1.1.0',
            format: 'image/png',
            bbox: map.getBounds().toBBoxString(),
            height: size.y,
            width: size.x,
            layers: layer.options.layers,
            query_layers: layer.options.layers,
            info_format: 'application/json'
        };

        const finalParams = Object.assign({}, baseParams, params);

        finalParams[finalParams.version === '1.3.0' ? 'i' : 'x'] = point.x;
        finalParams[finalParams.version === '1.3.0' ? 'j' : 'y'] = point.y;

        return layer._url + L.Util.getParamString(finalParams, layer._url, true);
    }
// tìm kiếm địa điểm
    let currentPage = 1;
    const resultsPerPage = 5;

    function searchLocations(page = 1) {
        const searchText = document.getElementById('search').value;

        // Ẩn lớp WMS khi bắt đầu tìm kiếm
        map.removeLayer(wmsLayer);
        map.removeLayer(markers);

        fetch(`http://localhost/FINAL/api/search_tourisms_in_area.php?q=${encodeURIComponent(searchText)}&page=${page}&results_per_page=${resultsPerPage}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    return;
                }

                console.log('Kết quả tìm kiếm: ', data);
                const tourismsContainer = document.getElementById('tourisms');
                if (page === 1) {
                    tourismsContainer.innerHTML = ''; // Xóa kết quả tìm kiếm cũ
                }
                data.forEach(tourism => {
                    const geojson = JSON.parse(tourism.geom);
                    tourismsContainer.innerHTML += `
                        <div class="tourism">
                            <p>${tourism.tourism}</p>
                            <button onclick="getDirections(${geojson.coordinates[1]}, ${geojson.coordinates[0]})">Đường đi</button>
                        </div>
                    `;
                });
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
                alert('Có lỗi xảy ra trong quá trình tìm kiếm địa danh. Vui lòng thử lại sau.');
            });
    }

    document.getElementById('search-btn').addEventListener('click', function () {
        currentPage = 1;
        searchLocations(currentPage);
    });

    document.getElementById('load-more-btn').addEventListener('click', function () {
        currentPage++;
        searchLocations(currentPage);
    });

// Chỉ đường
    window.getDirections = function (lat, lng) {
        if (isNaN(lat) || isNaN(lng)) {
            alert('Tọa độ không hợp lệ!');
            return;
        }

        const mapDiv = document.getElementById('map');
        mapDiv.style.display = 'block';

        setTimeout(() => {
            map.invalidateSize();
            map.setView([lat, lng], 14);
        }, 100);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const from_lat = position.coords.latitude;
                const from_lng = position.coords.longitude;

                fetch(`http://localhost/FINAL/api/get_directions.php?from_lat=${from_lat}&from_lng=${from_lng}&to_lat=${lat}&to_lng=${lng}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.features && data.features.length > 0) {
                            const coordinates = data.features[0].geometry.coordinates;
                            const latlngs = coordinates.map(c => [c[1], c[0]]);
                            const route = L.polyline(latlngs, { color: 'red' }).addTo(map);

                            const startMarker = L.marker([from_lat, from_lng]).addTo(map).bindPopup("Điểm bắt đầu").openPopup();
                            const endMarker = L.marker([lat, lng]).addTo(map).bindPopup("Điểm đến").openPopup();

                            map.fitBounds(route.getBounds());
                        } else {
                            alert('Không tìm thấy chỉ đường!');
                        }
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                        alert('Có lỗi xảy ra trong quá trình lấy chỉ đường. Vui lòng thử lại sau.');
                    });
            });
        } else {
            alert('Trình duyệt của bạn không hỗ trợ định vị!');
        }
    };
});
