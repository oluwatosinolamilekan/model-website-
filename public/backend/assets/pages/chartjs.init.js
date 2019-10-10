!(function (d) {
    "use strict";
    var r = function () { };
    (r.prototype.respChart = function (r, o, e, a) {
        var t = r.get(0).getContext("2d"),
            n = d(r).parent();
        function i() {
            r.attr("width", d(n).width());
            switch (o) {
                case "Line":
                    new Chart(t, { type: "line", data: e, options: a });
                    break;
            }
        }
        d(window).resize(i), i();
    }),
        (r.prototype.init = function () {
            this.respChart(
                d("#lineChart"),
                "Line",
                {
                    labels: [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July",
                        "August",
                        "September",
                        "October"
                    ],
                    datasets: [
                        {
                            label: "Sales Analytics",
                            fill: !0,
                            lineTension: 0.5,
                            backgroundColor: "rgba(245, 178, 37, 0.2)",
                            borderColor: "#f5b225",
                            borderCapStyle: "butt",
                            borderDash: [],
                            borderDashOffset: 0,
                            borderJoinStyle: "miter",
                            pointBorderColor: "#f5b225",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#f5b225",
                            pointHoverBorderColor: "#fff",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
                        },
                        
                    ]
                },
                { scales: { yAxes: [{ ticks: { max: 100, min: 20, stepSize: 10 } }] } }
            );
        }),
        (d.ChartJs = new r()),
        (d.ChartJs.Constructor = r);
})(window.jQuery),
    (function (r) {
        "use strict";
        window.jQuery.ChartJs.init();
    })();
