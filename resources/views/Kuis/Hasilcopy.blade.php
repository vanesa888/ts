
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('tamplate.haed')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('tamplate.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tamplate.sidebar')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{asset('/home')}}">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="panel">
   <div id="chartKuis"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis1"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis2"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis3"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis4"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis5"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis6"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis7"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis8"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis9"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis10"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis11"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis12"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis13"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis14"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis15"></div>
   </div>
   <br>
   <div class="panel">
   <div id="chartKuis16"></div>
   </div>
   </div>
   </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
<script src="{{asset('highcharts.js')}}"></script>
<script>
 Highcharts.chart('chartKuis', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Untuk Status Bekerja'
    },
    
    xAxis: {
        categories: {!!json_encode($categories)!!},
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
</script><br>
<script>
 Highcharts.chart('chartKuis1', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Untuk Masa Tunggu'
    },
    xAxis: {
        categories:{!!json_encode($categori)!!},
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
        data: {!!json_encode($data4)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Untuk Kepuasan Pelayanan Dari Program Studi'
    },
    
    xAxis: {
        categories: {!!json_encode($categorie)!!},
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
        data: {!!json_encode($data5)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Untuk Kepuasan Saudara terhadap penguasaan kompetensi saat lulus dari Program Studi'
    },
    
    xAxis: {
        categories: {!!json_encode($categorie)!!},
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
        data: {!!json_encode($data5)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis4', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Untuk Deskripsikan pekerjaan'
    },
    
    xAxis: {
        categories: {!!json_encode($sed)!!},
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
        data: {!!json_encode($data6)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis5', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Bidang wirausaha yang ditekuni'
    },
    
    xAxis: {
        categories: {!!json_encode($nib)!!},
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
        data: {!!json_encode($data7)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis6', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey persentase kesesuaian pengetahuan dan keterampilan yang Saudara peroleh dari Program Studi'
    },
    
    xAxis: {
        categories: {!!json_encode($categorie)!!},
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
        data: {!!json_encode($data3)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis7', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Mendapat Informasi Tentang Pekerjaan'
    },
    
    xAxis: {
        categories: {!!json_encode($fin)!!},
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
        data: {!!json_encode($data8)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis8', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Kesulitan untuk mendapatkan pekerjaan'
    },
    
    xAxis: {
        categories: {!!json_encode($lus)!!},
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
        data: {!!json_encode($data9)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis9', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey hambatan apa saja yang ditemui untuk memperoleh pekerjaan'
    },
    
    xAxis: {
        categories: {!!json_encode($mah)!!},
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
        data: {!!json_encode($data10)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis10', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey pertimbangan utama Saudara dalam memilih pekerjaan'
    },
    
    xAxis: {
        categories: {!!json_encode($rep)!!},
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
        data: {!!json_encode($data11)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis11', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Rata-rata Pendapatan'
    },
    
    xAxis: {
        categories: {!!json_encode($catego)!!},
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
        data: {!!json_encode($data2)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis12', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Bersaing Dengan Lulusan Lainnya'
    },
    
    xAxis: {
        categories: {!!json_encode($yad)!!},
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
        data: {!!json_encode($data12)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis13', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey lulusan Prodi S1 Informatika yg bagaimana yg diperlukan oleh pasar/lapangan kerja'
    },
    
    xAxis: {
        categories: {!!json_encode($lu)!!},
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
        data: {!!json_encode($data13)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis14', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey Hubungan dengan Prodi'
    },
    
    xAxis: {
        categories: {!!json_encode($buh)!!},
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
        data: {!!json_encode($data14)!!}
    }]
});
</script>
<br>
<script>
 Highcharts.chart('chartKuis15', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Hasil Survey berkomunikasi atau berhubungan dengan Prodi'
    },
    
    xAxis: {
        categories: {!!json_encode($mok)!!},
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
        data: {!!json_encode($data15)!!}
    }]
});
</script>
</body>
</html>
