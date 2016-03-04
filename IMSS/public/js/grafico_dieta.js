       // inicia grafico de pastel desayuno

        $(function () {
    $('#graficapastel1').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Desayuno'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 20.5],
                {
                    name: 'Proteina',
                    y: 21.5,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 10.5],
                
            ]
        }]
    });
});
        // fin grafica pastel desayuno

        // inicia grafica pastel comida
        $(function () {
    $('#graficapastel2').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Comida'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 45.0],
                {
                    name: 'Proteina',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 8.5],
                
            ]
        }]
    });
});

        //inicia grafica pastel cena

        $(function () {
    $('#graficapastel3').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafico Cena'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Ingesta',
            data: [
                ['H. de C.', 4.0],
                {
                    name: 'Proteina',
                    y: 10.8,
                    sliced: true,
                    selected: true
                },
                ['Lipidos', 2.5],
                
            ]
        }]
    });
});
        // termina grafica pastel cena