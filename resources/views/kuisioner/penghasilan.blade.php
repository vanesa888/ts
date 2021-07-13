<div class="panel">
   <div id="chartKuis"></div>
   </div>
<script src="{{asset('highcharts.js')}}"></script>
<script>
 Highcharts.chart('chartKuis', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey'
    },
    
    xAxis: {
        categories: {!!json_encode($nama)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nilai'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Nilai',
        data: {!!json_encode($data)!!}
    }]
});
</script>