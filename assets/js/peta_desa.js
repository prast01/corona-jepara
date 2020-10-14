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

    var base_url2 = $(location).attr("pathname");
    base_url2.indexOf(1);
    base_url2.toLowerCase();
    var id_kec =
      window.location.origin === "https://corona.jepara.go.id"
        ? base_url2.split("/")[3]
        : base_url2.split("/")[4];

    var base_url3 = $(location).attr("pathname");
    base_url3.indexOf(1);
    base_url3.toLowerCase();
    var jenis =
      window.location.origin === "https://corona.jepara.go.id"
        ? base_url3.split("/")[4]
        : base_url3.split("/")[5];

    peta_konfirmasi(id_kec, jenis);
    function peta_konfirmasi(id_kec, jenis) {
      $.ajax({
        type: "GET",
        url: site_url + "data/data_peta_by/" + id_kec + "/" + jenis,
        // url: "http://lapor-covid19.mi-kes.net/servicesV2/get_peta",
        dataType: "json",
        success: function (data) {
          var desa = data;
          var jns = desa.jenis;
          // MAPS
          // var map = L.map("map").setView([-6.5889, 110.7518], 11);
          var map = L.map("map").setView([desa.lat, desa.long], desa.zoom);

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

          if (jns === 1) {
            info.update = function (props) {
              this._div.innerHTML =
                "<h4>Jumlah Sebaran Kasus Terkonfirmasi</h4>" +
                (props
                  ? "<b>" +
                    props.name +
                    "</b><br /><span style='color:" +
                    color_case(1, 0, 1) +
                    "'>" +
                    props.saat_ini +
                    " Kasus Saat Ini</span><br /><span style='color:" +
                    color_case(0, 1, 1) +
                    "'>" +
                    props.sembuh +
                    " Kasus Sembuh</span><br /><span style='color: black'>" +
                    props.meninggal +
                    " Kasus meninggal</span><br />"
                  : "Arahkan Mouse Ke Peta Desa");
            };
          } else if (jns === 2) {
            info.update = function (props) {
              this._div.innerHTML =
                "<h4>Jumlah Sebaran Kasus Probable</h4>" +
                (props
                  ? "<b>" +
                    props.name +
                    "</b><br /><span style='color:" +
                    color_case(1, 0, 2) +
                    "'>" +
                    props.saat_ini +
                    " Kasus Saat Ini</span><br /><span style='color:" +
                    color_case(0, 1, 2) +
                    "'>" +
                    props.sembuh +
                    " Kasus Sembuh</span><br /><span style='color: black'>" +
                    props.meninggal +
                    " Kasus meninggal</span><br />"
                  : "Arahkan Mouse Ke Peta Desa");
            };
          } else if (jns === 3) {
            info.update = function (props) {
              this._div.innerHTML =
                "<h4>Jumlah Sebaran Kasus Suspek</h4>" +
                (props
                  ? "<b>" +
                    props.name +
                    "</b><br /><span style='color:" +
                    color_case(1, 0, 3) +
                    "'>" +
                    props.saat_ini +
                    " Kasus Saat Ini</span><br /><span style='color:black'>" +
                    props.discarded +
                    " Kasus Discarded</span><br />"
                  : "Arahkan Mouse Ke Peta Desa");
            };
          }

          info.addTo(map);

          var legend = L.control({
            position: "bottomright",
          });

          if (jns === 1) {
            legend.onAdd = function (map) {
              var div = L.DomUtil.create("div", "info-peta legend"),
                labels = [];
              labels.push(
                '<i style="background:' +
                  color_case(1, 0, 1) +
                  '"></i> Kasus Saat Ini <br>'
              );
              labels.push(
                '<i style="background:' +
                  color_case(0, 1, 1) +
                  '"></i> Kasus Sembuh <br>'
              );
              labels.push(
                '<i style="border-color: black; background:' +
                  color_case(0, 0, 1) +
                  '"></i> Tidak Ada Kasus <br>'
              );

              div.innerHTML = labels.join("<br>");
              return div;
            };
          } else if (jns === 2) {
            legend.onAdd = function (map) {
              var div = L.DomUtil.create("div", "info-peta legend"),
                labels = [];
              labels.push(
                '<i style="background:' +
                  color_case(1, 0, 2) +
                  '"></i> Kasus Saat Ini <br>'
              );
              labels.push(
                '<i style="background:' +
                  color_case(0, 1, 2) +
                  '"></i> Kasus Sembuh <br>'
              );
              labels.push(
                '<i style="border-color: black; background:' +
                  color_case(0, 0, 2) +
                  '"></i> Tidak Ada Kasus <br>'
              );

              div.innerHTML = labels.join("<br>");
              return div;
            };
          } else if (jns === 3) {
            legend.onAdd = function (map) {
              var div = L.DomUtil.create("div", "info-peta legend"),
                labels = [];
              labels.push(
                '<i style="background:' +
                  color_case(1, 0, 3) +
                  '"></i> Kasus Saat Ini <br>'
              );
              labels.push(
                '<i style="background:' +
                  color_case(0, 1, 3) +
                  '"></i> Kasus Discarded <br>'
              );
              labels.push(
                '<i style="border-color: black; background:' +
                  color_case(0, 0, 3) +
                  '"></i> Tidak Ada Kasus <br>'
              );

              div.innerHTML = labels.join("<br>");
              return div;
            };
          }

          legend.addTo(map);

          function color_case(dirawat, sembuh, jenis) {
            var color;
            if (jenis === 1) {
              if (dirawat > 0) {
                color = "#f82649";
              } else if (sembuh > 0) {
                color = "#27AE60";
              } else {
                // color = "#27AE60";
                color = "#FFFFFF";
              }
            } else if (jenis === 2) {
              if (dirawat > 0) {
                color = "#fc8403";
              } else if (sembuh > 0) {
                color = "#27AE60";
              } else {
                // color = "#27AE60";
                color = "#FFFFFF";
              }
            } else if (jenis === 3) {
              if (dirawat > 0) {
                color = "#1a6e2c";
              } else if (sembuh > 0) {
                color = "#70ff8d";
              } else {
                // color = "#70ff8d";
                color = "#FFFFFF";
              }
            }

            return color;
          }

          function style_1(feature) {
            return {
              weight: 2,
              opacity: 1,
              color: "black",
              dashArray: "3",
              fillOpacity: 0.3,
              fillColor: color_case(
                feature.properties.saat_ini,
                feature.properties.sembuh,
                1
              ),
            };
          }

          function style_2(feature) {
            return {
              weight: 2,
              opacity: 1,
              color: "black",
              dashArray: "3",
              fillOpacity: 0.3,
              fillColor: color_case(
                feature.properties.saat_ini,
                feature.properties.sembuh,
                2
              ),
            };
          }

          function style_3(feature) {
            return {
              weight: 2,
              opacity: 1,
              color: "black",
              dashArray: "3",
              fillOpacity: 0.3,
              fillColor: color_case(
                feature.properties.saat_ini,
                feature.properties.discarded,
                3
              ),
            };
          }

          function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
              weight: 5,
              color: "#666",
              dashArray: "",
              fillOpacity: 1,
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

          if (jns === 1) {
            geojson = L.geoJson(desa, {
              style: style_1,
              onEachFeature: onEachFeature,
            }).addTo(map);
          } else if (jns === 2) {
            geojson = L.geoJson(desa, {
              style: style_2,
              onEachFeature: onEachFeature,
            }).addTo(map);
          } else if (jns === 3) {
            geojson = L.geoJson(desa, {
              style: style_3,
              onEachFeature: onEachFeature,
            }).addTo(map);
          }
        },
        timeout: 60000, // 1000 = 1 second
      });
    }
  });
})(jQuery);
