(function ($) {
  "use strict";
  $(document).on("ready", function () {
    var base_url = $(location).attr("pathname");
    base_url.indexOf(1);
    base_url.toLowerCase();
    base_url =
      window.location.origin === "https://corona.jatengprov.go.id"
        ? ""
        : base_url.split("/")[1] + "/";
    var site_url = window.location.origin + "/" + base_url;

    console.log(site_url);

    get_chart_harian();
    function get_chart_harian() {
      let chart_harian_covid_sum = echarts.init(
        document.getElementById("chart-harian-covid-sum")
      );
      let chart_harian_sembuh_sum = echarts.init(
        document.getElementById("chart-harian-sembuh-sum")
      );
      let chart_harian_meninggal_sum = echarts.init(
        document.getElementById("chart-harian-meninggal-sum")
      );
      let chart_harian_suspek_sum = echarts.init(
        document.getElementById("chart-harian-suspek-sum")
      );
      let chart_harian_probable_sum = echarts.init(
        document.getElementById("chart-harian-probable-sum")
      );
      let chart_harian_covid = echarts.init(
        document.getElementById("chart-harian-covid")
      );
      let chart_harian_sembuh = echarts.init(
        document.getElementById("chart-harian-sembuh")
      );
      let chart_harian_meninggal = echarts.init(
        document.getElementById("chart-harian-meninggal")
      );
      let chart_harian_suspek = echarts.init(
        document.getElementById("chart-harian-suspek")
      );
      let chart_harian_probable = echarts.init(
        document.getElementById("chart-harian-probable")
      );
      $.ajax({
        type: "post",
        url: site_url + "data/chart_harian",
        cache: false,
        async: true,
        dataType: "JSON",
        success: function (data, textStatus, jqXHR) {
          let tanggal = [];
          let covid_sum = [];
          let sembuh_sum = [];
          let meninggal_sum = [];
          let suspek_sum = [];
          let probable_sum = [];
          let covid = [];
          let sembuh = [];
          let meninggal = [];
          let suspek = [];
          let probable = [];

          $.each(data, function (index, val) {
            tanggal.push(val.tanggal);
            covid_sum.push(val.covid_sum);
            sembuh_sum.push(val.sembuh_sum);
            meninggal_sum.push(val.meninggal_sum);
            suspek_sum.push(val.suspek_sum);
            probable_sum.push(val.probable_sum);
            covid.push(val.covid);
            sembuh.push(val.sembuh);
            meninggal.push(val.meninggal);
            suspek.push(val.suspek);
            probable.push(val.probable);
          });

          chart_harian_covid_sum.setOption({
            title: {
              text: "Terkonfirmasi\nDirawat + Dirujuk",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: covid_sum,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_sembuh_sum.setOption({
            title: {
              text: "Terkonfirmasi\nSembuh",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: sembuh_sum,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_meninggal_sum.setOption({
            title: {
              text: "Terkonfirmasi\nMeninggal",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: meninggal_sum,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_suspek_sum.setOption({
            title: {
              text: "Suspek",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "green",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "suspek",
                type: "bar",
                color: ["#70db70"],
                data: suspek_sum,
                markPoint: {
                  data: [{ type: "max", name: "suspek" }],
                },
              },
            ],
          });

          chart_harian_probable_sum.setOption({
            title: {
              text: "Probable",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "yellow",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "probable",
                type: "bar",
                color: ["#70db70"],
                data: probable_sum,
                markPoint: {
                  data: [{ type: "max", name: "probable" }],
                },
              },
            ],
          });

          chart_harian_covid.setOption({
            title: {
              text: "Terkonfirmasi\nDirawat + Dirujuk",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: covid,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_sembuh.setOption({
            title: {
              text: "Terkonfirmasi\nSembuh",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: sembuh,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_meninggal.setOption({
            title: {
              text: "Terkonfirmasi\nMeninggal",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "red",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "covid",
                type: "bar",
                color: ["#FF4D4A"],
                data: meninggal,
                markPoint: {
                  data: [{ type: "max", name: "covid" }],
                },
              },
            ],
          });

          chart_harian_suspek.setOption({
            title: {
              text: "Suspek",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "green",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "suspek",
                type: "bar",
                color: ["#70db70"],
                data: suspek,
                markPoint: {
                  data: [{ type: "max", name: "suspek" }],
                },
              },
            ],
          });

          chart_harian_probable.setOption({
            title: {
              text: "Probable",
              subtext: "\n",
              textAlign: "left",
              padding: [25, 15, 30, 25],
              itemGap: 5,
            },
            grid: {
              top: "20%",
            },
            tooltip: {
              trigger: "axis",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            dataZoom: [
              {
                type: "inside",
                start: 50,
                end: 100,
              },
              {
                start: 50,
                end: 100,
                handleIcon:
                  "M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z",
                handleSize: "80%",
                handleStyle: {
                  color: "yellow",
                  shadowBlur: 3,
                  shadowColor: "rgba(0, 0, 0, 0.6)",
                  shadowOffsetX: 2,
                  shadowOffsetY: 2,
                },
              },
            ],
            calculable: true,
            xAxis: [
              {
                type: "category",
                data: tanggal,
              },
            ],
            yAxis: [
              {
                type: "value",
              },
            ],
            series: [
              {
                name: "probable",
                type: "bar",
                color: ["#70db70"],
                data: probable,
                markPoint: {
                  data: [{ type: "max", name: "probable" }],
                },
              },
            ],
          });
        },
      });

      $("#pills-harian-sum").click(function () {
        setTimeout(function () {
          chart_harian_covid_sum.resize();
          chart_harian_sembuh_sum.resize();
          chart_harian_meninggal_sum.resize();
          chart_harian_suspek_sum.resize();
          chart_harian_probable_sum.resize();
        }, 200);
      });

      $("#pills-harian").click(function () {
        setTimeout(function () {
          chart_harian_covid.resize();
          chart_harian_sembuh.resize();
          chart_harian_meninggal.resize();
          chart_harian_suspek.resize();
          chart_harian_probable.resize();
        }, 200);
      });

      $(window).on("resize", function () {
        setTimeout(function () {
          chart_harian_covid_sum.resize();
          chart_harian_sembuh_sum.resize();
          chart_harian_meninggal_sum.resize();
          chart_harian_suspek_sum.resize();
          chart_harian_probable_sum.resize();
        }, 200);
      });
    }

    get_umur();
    function get_umur() {
      let chart_sex_covid = echarts.init(
        document.getElementById("chart-sex-covid")
      );
      let chart_sex_probable = echarts.init(
        document.getElementById("chart-sex-probable")
      );
      let chart_sex_suspek = echarts.init(
        document.getElementById("chart-sex-suspek")
      );
      $.ajax({
        type: "post",
        url: site_url + "data/chart_gender",
        cache: false,
        async: true,
        dataType: "JSON",
        success: function (data, textStatus, jqXHR) {
          let sex = [];
          let covid = [];
          let probable = [];
          let suspek = [];
          $.each(data, function (index, val) {
            sex.push(val.sex);
            covid.push({ name: val.sex, value: val.covid });
            probable.push({ name: val.sex, value: val.probable });
            suspek.push({ name: val.sex, value: val.suspek });
          });

          chart_sex_covid.setOption({
            title: {
              text: "Kasus Terkonfirmasi",
              subtext: "\n",
              left: "center",
              padding: [
                40, // up
                10, // right
                10, // down
                10, // left
              ],
            },
            tooltip: {
              trigger: "item",
              formatter: "{a} <br/>{b} : {c} ({d}%)",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            legend: {
              left: "center",
              bottom: 10,
              data: sex,
            },
            series: [
              {
                name: "jenis kelamin",
                type: "pie",
                radius: "55%",
                center: ["50%", "50%"],
                color: ["#b30000", "#ff4d4d"],
                data: covid,
                label: {
                  formatter: "{d}%",
                },
                emphasis: {
                  itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: "rgba(0, 0, 0, 0.5)",
                  },
                },
              },
            ],
          });

          chart_sex_probable.setOption({
            title: {
              text: "Kasus Probable",
              subtext: "\n",
              left: "center",
              padding: [
                40, // up
                10, // right
                10, // down
                10, // left
              ],
            },
            tooltip: {
              trigger: "item",
              formatter: "{a} <br/>{b} : {c} ({d}%)",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            legend: {
              left: "center",
              bottom: 10,
              data: sex,
            },
            series: [
              {
                name: "jenis kelamin",
                type: "pie",
                radius: "55%",
                center: ["50%", "50%"],
                color: ["#ffcc00", "#ffeb99"],
                data: probable,
                label: {
                  formatter: "{d}%",
                },
                emphasis: {
                  itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: "rgba(0, 0, 0, 0.5)",
                  },
                },
              },
            ],
          });

          chart_sex_suspek.setOption({
            title: {
              text: "Kasus Suspek",
              subtext: "\n",
              left: "center",
              padding: [
                40, // up
                10, // right
                10, // down
                10, // left
              ],
            },
            tooltip: {
              trigger: "item",
              formatter: "{a} <br/>{b} : {c} ({d}%)",
            },
            toolbox: {
              show: false,
              feature: {
                dataView: { show: false, readOnly: false },
                magicType: { show: false, type: ["line", "bar"] },
                restore: { show: false },
                saveAsImage: { show: true },
              },
            },
            legend: {
              left: "center",
              bottom: 10,
              data: sex,
            },
            series: [
              {
                name: "jenis kelamin",
                type: "pie",
                radius: "55%",
                center: ["50%", "50%"],
                color: ["#009933", "#00e64d"],
                data: suspek,
                label: {
                  formatter: "{d}%",
                },
                emphasis: {
                  itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: "rgba(0, 0, 0, 0.5)",
                  },
                },
              },
            ],
          });
        },
      });
      $(window).on("resize", function () {
        setTimeout(function () {
          chart_sex_covid.resize();
          chart_sex_probable.resize();
          chart_sex_suspek.resize();
        }, 500);
      });
    }
  });
})(jQuery);
