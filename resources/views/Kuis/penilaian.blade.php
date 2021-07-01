
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

  <!-- Content Wrapper. Contains page content -->
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
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
     <div class="card card-info card-outline">

      <h3><center> Kuisioner </center></h3>  
       <div class="card-body">
       <form action="{{route('simpan-jawab')}}" method="post">
               {{ csrf_field() }}
              <h5> 1. Saat baru lulus, menurut penilaian Saudara, sejauh mana Saudara menguasai kompetensi berikut </h5><br> 
              <div class="form-group">
                    <label for="jawaban_pengum">a. Pengetahuan Umum</label>
                    <br>
                        <input type="radio"  name="jawaban_pengum" id="jawaban_pengum" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_pengum" id="jawaban_pengum" value="2"> Menguasai<br>
                        <input type="radio"  name="jawaban_pengum" id="jawaban_pengum" value="3"> Kurang Menguasai <br>
                        <input type="radio"  name="jawaban_pengum" id="jawaban_pengum" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawban_bing">b. Bahasa Inggris</label>
                    <br>
                        <input type="radio"  name="jawaban_bing" id="jawaban_bing" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_bing" id="jawaban_bing" value="2"> Menguasai<br>
                        <input type="radio"  name="jawaban_bing" id="jawaban_bing" value="3"> Kurang Menguasai <br>
                        <input type="radio"  name="jawaban_bing" id="jawaban_bing" value="4"> Tidak Menguasai <br>  
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_kom">c. Komputer </label>
                    <br>
                        <input type="radio"  name="jawaban_kom" id="jawaban_kom" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_kom" id="jawaban_kom" value="2"> Menguasai<br>
                        <input type="radio"  name="jawaban_kom" id="jawaban_kom" value="3"> Kurang Menguasai <br>
                        <input type="radio"  name="jawaban_kom" id="jawaban_kom" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_metpen">d. Metodologi Penelitian </label>
                    <br>
                        <input type="radio"  name="jawaban_metpen" id="jawaban_metpen" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_metpen" id="jawaban_metpen" value="2"> Menguasai<br>
                        <input type="radio"  name="jawaban_metpen" id="jawaban_metpen" value="3"> Kurang Menguasai<br>
                        <input type="radio"  name="jawaban_metpen" id="jawaban_metpen" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_kerjatim">e. Kerjasama Tim</label>
                    <br>
                        <input type="radio" name="jawaban_kerjatim" id="jawaban_kerjatim" value="1"> Sangat Menguasai <br>
                        <input type="radio" name="jawaban_kerjatim" id="jawaban_kerjatim" value="2"> Menguasai <br>
                        <input type="radio" name="jawaban_kerjatim" id="jawaban_kerjatim" value="3"> Kurang Menguasai <br>
                        <input type="radio" name="jawaban_kerjatim" id="jawaban_kerjatim" value="4"> Tidak Menguasai <br>       
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_komlis"> f. Keterampilan Komunikasi Lisan </label>
                    <br>
                        <input type="radio"  name="jawaban_komlis" id="jawaban_komlis" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_komlis" id="jawaban_komlis" value="2"> Menguasai<br>
                        <input type="radio"  name="jawaban_komlis" id="jawaban_komlis" value="3"> Kurang Menguasai<br>
                        <input type="radio"  name="jawaban_komlis" id="jawaban_komlis" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_komtulis">g. Keterampilan Komunikasi Tertulis  </label>
                    <br>
                        <input type="radio"  name="jawaban_komtulis" id="jawaban_komtulis" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_komtulis" id="jawaban_komtulis" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_komtulis" id="jawaban_komtulis" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_komtulis" id="jawaban_komtulis" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_pemmas"> h. Proses Pemerdayaan Masyarakat </label>
                    <br>
                        <input type="radio"  name="jawaban_pemmas" id="jawaban_pemmas" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_pemmas" id="jawaban_pemmas" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_pemmas" id="jawaban_pemmas" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_pemmas" id="jawaban_pemmas" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_teoris"> i. Pengetahuan Teoris Spesifik </label>
                    <br>
                        <input type="radio"  name="jawaban_teoris" id="jawaban_teoris" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_teoris" id="jawaban_teoris" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_teoris" id="jawaban_teoris" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_teoris" id="jawaban_teoris" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_praktis"> j. Pengetahuan Praktis Spesifik </label>
                    <br>
                        <input type="radio"  name="jawaban_praktis" id="jawaban_praktis" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_praktis" id="jawaban_praktis" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_praktis" id="jawaban_praktis" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_praktis" id="jawaban_praktis" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_manajemen"> k. Manajemen Organisasi </label>
                    <br>
                        <input type="radio"  name="jawaban_manajemen" id="jawaban_manajemen" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_manajemen" id="jawaban_manajemen" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_manajemen" id="jawaban_manajemen" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_manajemen" id="jawaban_manajemen" value="4"> Tidak Menguasai <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="jawaban_kepemimpinan"> l. Kepemimpinan / Leadership </label>
                    <br>
                        <input type="radio"  name="jawaban_kepemimpinan" id="jawaban_kepemimpinan" value="1"> Sangat Menguasai <br>
                        <input type="radio"  name="jawaban_kepemimpinan" id="jawaban_kepemimpinan" value="2"> Menguasai <br>
                        <input type="radio"  name="jawaban_kepemimpinan" id="jawaban_kepemimpinan" value="3"> Kurang menguasai<br>
                        <input type="radio"  name="jawaban_kepemimpinan" id="jawaban_kepemimpinan" value="4"> Tidak Menguasai <br>
                </div>

                
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
         
       </div>
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->

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
  @include('tamplate.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>


