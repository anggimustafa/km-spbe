$(function () {


    // =====================================
    // Profit
    // =====================================
    var chart = {
        series: [
            { name: "Postingan dibuat:", data: [0, 0, 0, 0, 0, 0, 1, 5, 0, 0, 3, 0] },
            { name: "Postingan dipublish:", data: [0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 3, 0] },
        ],

        chart: {
            type: "bar",
            height: 345,
            offsetX: -15,
            toolbar: { show: true },
            foreColor: "#adb0bb",
            fontFamily: 'inherit',
            sparkline: { enabled: false },
        },


        colors: ["#5D87FF", "#49BEFF"],


        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "35%",
                borderRadius: [6],
                borderRadiusApplication: 'end',
                borderRadiusWhenStacked: 'all'
            },
        },
        markers: { size: 0 },

        dataLabels: {
            enabled: false,
        },


        legend: {
            show: true,
        },


        grid: {
            borderColor: "rgba(0,0,0,0.1)",
            strokeDashArray: 3,
            xaxis: {
                lines: {
                    show: false,
                },
            },
        },

        xaxis: {
            type: "category",
            categories: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sept", "Okt", "Nov", "Des"],
            labels: {
                style: { cssClass: "grey--text lighten-2--text fill-color" },
            },
        },


        yaxis: {
            show: true,
            min: 0,
            max: 50,
            tickAmount: 4,
            labels: {
                style: {
                    cssClass: "grey--text lighten-2--text fill-color",
                },
            },
        },
        stroke: {
            show: true,
            width: 3,
            lineCap: "butt",
            colors: ["transparent"],
        },


        tooltip: { theme: "light" },

        responsive: [
            {
                breakpoint: 600,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 3,
                        }
                    },
                }
            }
        ]


    };

    var chart = new ApexCharts(document.querySelector("#chart"), chart);
    chart.render();


    // =====================================
    // Breakup
    // =====================================
    var breakup = {
        color: "#adb5bd",
        series: [3, 2, 3, 0, 0, 1, 0],
        labels: ["Tata Kelola", "Manajemen", "Layanan", "Infrastruktur", "Aplikasi", "Keamanan", "Audit TIK"],
        chart: {
            width: 300,
            type: "donut",
            fontFamily: "Plus Jakarta Sans', sans-serif",
            foreColor: "#adb0bb",
        },
        plotOptions: {
            pie: {
                startAngle: 0,
                endAngle: 360,
                donut: {
                    size: '75%',
                },
            },
        },
        stroke: {
            show: false,
        },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: true,
        },
        colors: [
            "#FF6F61",  // Tata Kelola
            "#6FA3EF",  // Manajemen
            "#88D8B0",  // Layanan
            "#F7B2B1",  // Infrastruktur
            "#F8EBAF",  // Aplikasi
            "#D6A1E6",  // Keamanan
            "#FFCC5C"   // Audit TIK
        ],

        responsive: [
            {
                breakpoint: 991,
                options: {
                    chart: {
                        width: 150,
                    },
                },
            },
        ],
        tooltip: {
            theme: "dark",
            fillSeriesColor: false,
        },
    };

    var chart = new ApexCharts(document.querySelector("#breakup"), breakup);
    chart.render();



    // =====================================
    // Earning
    // =====================================
    var earning = {
        chart: {
            id: "sparkline3",
            type: "area",
            height: 60,
            sparkline: {
                enabled: true,
            },
            group: "sparklines",
            fontFamily: "Plus Jakarta Sans', sans-serif",
            foreColor: "#adb0bb",
        },
        series: [
            {
                name: "Earnings",
                color: "#49BEFF",
                data: [25, 66, 20, 40, 12, 58, 20],
            },
        ],
        stroke: {
            curve: "smooth",
            width: 2,
        },
        fill: {
            colors: ["#f3feff"],
            type: "solid",
            opacity: 0.05,
        },

        markers: {
            size: 0,
        },
        tooltip: {
            theme: "dark",
            fixed: {
                enabled: true,
                position: "right",
            },
            x: {
                show: false,
            },
        },
    };
    new ApexCharts(document.querySelector("#earning"), earning).render();
})
