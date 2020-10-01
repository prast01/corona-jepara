(function ($) {
  "use strict";
  $(document).on("ready", function () {
    var base_url = $(location).attr("pathname");
    base_url.indexOf(1);
    base_url.toLowerCase();
    base_url =
      window.location.origin === "https://corona.jepara.go.id"
        ? ""
        : base_url.split("/")[1] + "/";
    var site_url = window.location.origin + "/" + base_url;

    console.log(site_url);

    peta();
    function peta() {
      $.ajax({
        type: "GET",
        url: site_url + "data/data_peta",
        // url: "http://lapor-covid19.mi-kes.net/servicesV2/get_peta",
        dataType: "json",
        success: function (data) {
          var desa = data;
          // MAPS
          var map = L.map("map").setView([-6.5889, 110.7518], 11);

          L.tileLayer(
            "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
            {
              maxZoom: 18,
              attribution:
                'Sumber Data &copy; <a href="http://dinkes.jepara.go.id/">Dinkes Kab. Jepara</a>',
              id: "mapbox/light-v9",
              tileSize: 512,
              zoomOffset: -1,
            }
          ).addTo(map);

          // control that shows state info on hover
          var info = L.control();

          info.onAdd = function (map) {
            this._div = L.DomUtil.create("div", "info-peta");
            this.update();
            return this._div;
          };

          info.update = function (props) {
            this._div.innerHTML =
              "<h4>Jumlah Kasus Saat Ini</h4>" +
              (props
                ? "<b>" +
                  props.name +
                  "</b><br /><span style='color:" +
                  color_case(1, 0, 0) +
                  "'>" +
                  props.konfirmasi +
                  " Kasus Terkonfirmasi</span><br /><span style='color:" +
                  color_case(0, 1, 0) +
                  "'>" +
                  props.probable +
                  " Kasus Probable</span><br /><span style='color:" +
                  color_case(0, 0, 1) +
                  "'>" +
                  props.suspek +
                  " Kasus Suspek</span><br />"
                : "Arahkan Mouse Ke Peta Desa");
          };

          info.addTo(map);

          var legend = L.control({
            position: "bottomright",
          });

          legend.onAdd = function (map) {
            var div = L.DomUtil.create("div", "info-peta legend"),
              //   grades = [0, 10, 20, 50, 100, 200, 500, 1000],
              labels = [];
            //   from,
            //   to;

            // for (var i = 0; i < 3; i++) {
            labels.push(
              '<i style="background:' +
                color_case(1, 0, 0) +
                '"></i> Kasus Terkonfirmasi <br>'
            );
            labels.push(
              '<i style="background:' +
                color_case(0, 1, 0) +
                '"></i> Kasus Probable <br>'
            );
            labels.push(
              '<i style="background:' +
                color_case(0, 0, 1) +
                '"></i> Kasus Suspek <br>'
            );
            // }

            div.innerHTML = labels.join("<br>");
            return div;
          };

          legend.addTo(map);

          function color_case(konfirmasi, probable, suspek) {
            var color;
            if (konfirmasi > 0) {
              color = "#f82649";
            } else if (probable > 0) {
              //   color = "#ffdc2b";
              color = "#fc8403";
            } else if (suspek > 0) {
              color = "#27AE60";
            } else {
              color = "#27AE60";
            }

            return color;
          }

          function style(feature) {
            return {
              weight: 2,
              opacity: 1,
              color: "white",
              dashArray: "3",
              fillOpacity: 0.7,
              fillColor: color_case(
                feature.properties.konfirmasi,
                feature.properties.probable,
                feature.properties.suspek
              ),
            };
          }

          function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
              weight: 5,
              color: "#666",
              dashArray: "",
              fillOpacity: 0.7,
            });

            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
              layer.bringToFront();
            }

            info.update(layer.feature.properties);
          }

          var geojson;

          function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
          }

          function zoomToFeature(e) {
            var layer = e.target;
            map.fitBounds(layer.getBounds());
            info.update(layer.feature.properties);
          }

          function onEachFeature(feature, layer) {
            layer.on({
              mouseover: highlightFeature,
              mouseout: resetHighlight,
              click: zoomToFeature,
            });
          }

          geojson = L.geoJson(desa, {
            style: style,
            onEachFeature: onEachFeature,
          }).addTo(map);
        },
        timeout: 60000, // 1000 = 1 second
      });
    }
  });
})(jQuery);
