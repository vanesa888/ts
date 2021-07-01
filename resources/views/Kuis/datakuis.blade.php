
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
       <form action="{{route('simpan-kuis')}}" method="post">
               {{ csrf_field() }}
               <h5> C. Data Kepuasan Lulusan di Program Studi S1 Informatika UM Banjarmasin</h5><br> 
              <div class="form-group">
                    <label for="kepuasan_id">1. Seberapa tinggi kepuasan Saudara terhadap berbagai layanan yang diberikan Program Studi kepada Saudara saat masa kuliah?</label>
                    <br>
                        <input type="radio" name="kepuasan_id" id="kepuasan_id" value="1">  Sangat Puas 
                        <input type="radio" name="kepuasan_id" id="kepuasan_id" value="2">  Puas  
                        <input type="radio" name="kepuasan_id" id="kepuasan_id" value="3">  Cukup Puas
                        <input type="radio" name="kepuasan_id" id="kepuasan_id" value="4">  Kurang Puas
                        <input type="radio" name="kepuasan_id" id="kepuasan_id" value="5">  Tidak Puas
              </div>
              <br>
              <div class="form-group">
                    <label for="kepuasan1_id">2. Seberapa tinggi kepuasan Saudara terhadap penguasaan kompetensi saat lulus dari Program Studi?</label>
                    <br>
                        <input type="radio" name="kepuasan1_id" id="kepuasan1_id" value="1">  Sangat Puas 
                        <input type="radio" name="kepuasan1_id" id="kepuasan1_id" value="2">  Puas  
                        <input type="radio" name="kepuasan1_id" id="kepuasan1_id" value="3">  Cukup Puas
                        <input type="radio" name="kepuasan1_id" id="kepuasan1_id" value="4">  Kurang Puas
                        <input type="radio" name="kepuasan1_id" id="kepuasan1_id" value="5">  Tidak Puas        
              </div>
              <br>
              <div class="form-group">
                    <label for="status_id">3. Apakah Saudara sudah mendapatkan pekerjaan?</label>
                    <br>
                        <input type="radio" name="status_id" id="status_id" value="6"> Sudah <br>
                        <input type="radio" name="status_id" id="status_id" value="7"> Pernah bekerja dan sekarang mencari pekerjaan baru <br>
                        <input type="radio" name="status_id" id="status_id" value="8"> Pernah bekerja tapi sekarang sedang mendaftar studi lanjut <br>
                        <input type="radio" name="status_id" id="status_id" value="9"> Belum pernah bekerja dan sedang mendaftar studi lanjut <br>
                        <input type="radio" name="status_id" id="status_id" value="10"> Pernah bekerja, dan sekarang studi lanjut <br>
                        <input type="radio" name="status_id" id="status_id" value="11"> Tidak bekerja dan langsung studi lanjut <br>
                        <input type="radio" name="status_id" id="status_id" value="12"> Belum pernah bekerja dan masih mencari pekerjaan <br>
              </div><br>
              <h5> D. Riwayat Pekerjaan Lulusan Program Studi (Diisi Bagi Yang sudah Bekerja) </h5><br> 
              <div class="form-group">
                    <label for="deskripsi_id">1.	Deskripsikan pekerjaan pertama saudara setelah lulus di Fakultas Teknik, Pekerjaan</label>
                    <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="1"> Pemerintah (Pusat/Depertemen) <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="2"> Pemerintah (Daerah) <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="3"> Pemerintah (BUMN/BHMN) <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="4"> Swasta (Jasa) <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="5"> Swasta (Manufaktur) <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="6"> Wiraswasta <br>
                        <input type="radio"  name="deskripsi_id" id="deskripsi_id" value="7"> lainnya <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="bidangusaha_id">2. Bidang wirausaha yang ditekuni</label>
                    <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="1"> Pendidikan <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="2"> Perbankan <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="3"> Properti <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="4"> Konsultan Kontraktor <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="5"> Hiburan/Entertaiment <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="6"> Event Organizer (EO) <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="7"> Pertanian <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="8"> Perdagangan/Bisnis <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="9"> Perternakan <br>
                        <input type="radio"  name="bidangusaha_id" id="bidangusaha_id" value="10"> Lainnya
                </div>
                <br>
                <div class="form-group">
                    <label for="kesesuaian_id">3. Seberapa besar persentase kesesuaian pengetahuan dan keterampilan yang Saudara peroleh dari Program Studi dengan tuntutan pekerjaan pertama Saudara?</label>
                    <br>
                        <input type="radio" name="kesesuaian_id" id="kesesuaian_id" value="1"> > 86%
                        <input type="radio" name="kesesuaian_id" id="kesesuaian_id" value="2"> 76% sd 85%  
                        <input type="radio" name="kesesuaian_id" id="kesesuaian_id" value="3"> 61% sd 75%
                        <input type="radio" name="kesesuaian_id" id="kesesuaian_id" value="4"> 51% sd 59% 
                        <input type="radio" name="kesesuaian_id" id="kesesuaian_id" value="5"> < 50%        
                </div>
                <br>
                <div class="form-group">
                    <label for="info_id">4.	Darimana Saudara mendapat informasi tentang pekerjaan pertama kali? </label>
                    <br>
                        <input type="radio"  name="info_id" id="info_id" value="1"> Program Studi/Fakultas <br>
                        <input type="radio"  name="info_id" id="info_id" value="2"> Dosen <br>
                        <input type="radio"  name="info_id" id="info_id" value="3"> Organisasi Alumni<br>
                        <input type="radio"  name="info_id" id="info_id" value="4"> Media Cetak <br>
                        <input type="radio"  name="info_id" id="info_id" value="5"> Media Elektronik (Televisi, Internet, Radio) <br>
                        <input type="radio"  name="info_id" id="info_id" value="6"> Kenalan <br>
                        <input type="radio"  name="info_id" id="info_id" value="7"> Lainnya
                </div>
                <br>
                <div class="form-group">
                    <label for="kesulitan_id">5. Apakah Saudara merasa kesulitan untuk mendapatkan pekerjaan pertama? </label>
                    <br>
                        <input type="radio" name="kesulitan_id" id="kesulitan_id" value="1"> Ya
                        <input type="radio" name="kesulitan_id" id="kesulitan_id" value="2"> Tidak        
                </div>
                <br>
                <div class="form-group">
                    <label for="hambatan_id"> 6. Hambatan apa saja yang ditemui untuk memperoleh pekerjaan pertama  </label>
                    <br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="1"> IPK tidak memenuhi syarat <br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="2"> Akreditasi prodi kurang mendukung, misal C atau belum terakreditasi ketika  <br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="3"> Kalah bersaing dengan pencari kerja yang lain<br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="4"> Lowongan kerja jarang atau tidak sesuai dengan bidang keahlian. <br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="5"> Lowongan tidak sesuai dengan minat karir <br>
                        <input type="radio"  name="hambatan_id" id="hambatan_id" value="6"> Lainnya  <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="pertimbangan_id"> 7. Secara umum, apa pertimbangan utama Saudara dalam memilih pekerjaan pertama?  </label>
                    <br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="1"> Gaji memadai <br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="2"> Sesuai bidang keilmuan  <br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="3"> Mendapatkan pengalaman<br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="4"> Mendapatkan ilmu pengetahuan <br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="5"> Mendapatkan keterampilan <br>
                        <input type="radio"  name="pertimbangan_id" id="pertimbangan_id" value="6"> Lainnya  <br>
                </div>
                <br>
                <div class="form-group">
                    <label for="penghasilan_id"> 8. Berapa rata-rata pendapatan (take home pay = seluruh pendapatan per bulan termasuk bonus, insentif, dsb.) Saudara pada pekerjaan pertama? </label>
                    <br>
                        <input type="radio"  name="penghasilan_id" id="penghasilan_id" value="1"> < 1 Juta 
                        <input type="radio"  name="penghasilan_id" id="penghasilan_id" value="2"> 1 - 3 Juta  
                        <input type="radio"  name="penghasilan_id" id="penghasilan_id" value="3"> 3 - 5 Juta
                        <input type="radio"  name="penghasilan_id" id="penghasilan_id" value="4"> 5 - 7 Juta
                        <input type="radio"  name="penghaslian_id" id="penghasilan_id" value="5"> > 10 Juta
                </div>
                <br>
                <h5> E.	Indikator Kompetensi dan Daya Saing </h5><br>
                <div class="form-group">
                    <label for="dayasaing_id"> 1. Saat baru lulus, sejauh mana Saudara merasa mampu bersaing dengan lulusan perguruan tinggi lain? </label>
                    <br>
                        <input type="radio"  name="dayasaing_id" id="dayasaing_id" value="1"> Sangat Mampu 
                        <input type="radio"  name="dayasaing_id" id="dayasaing_id" value="2"> Mampu
                        <input type="radio"  name="dayasaing_id" id="dayasaing_id" value="3"> Kurang Mampu
                        <input type="radio"  name="dayasaing_id" id="dayasaing_id" value="4"> Sangat Tidak Mampu
                </div>
                <br>
                <div class="form-group">
                    <label for="lulusan_id"> 2.	Sejauh ini, menurut Saudara lulusan Fakultas Teknik yang bagaimana yg diperlukan oleh pasar/lapangan kerja? </label>
                    <br>
                        <input type="radio"  name="lulusan_id" id="lulusan_id" value="1"> Generik(umum) 
                        <input type="radio"  name="lulusan_id" id="lulusan_id" value="2"> Spesifik
                </div>
                <br>
                <h5> F. Hubungan Alumni Dengan Program Studi </h5><br>
                <div class="form-group">
                   <label for="hubungan_id"> 1. Bagaimana hubungan Saudara dengan Prodi terus terjalin ? </label>
                   <br>
                        <input type="radio"  name="hubungan_id" id="hubungan_id" value="1"> Kunjungan langsung ke Prodi
                        <input type="radio"  name="hubungan_id" id="hubungan_id" value="2"> Interaksi melalui media komunikasi
                        <input type="radio"  name="hubungan_id" id="hubungan_id" value="3"> Lain-lain
                </div>
                <br>
                <div class="form-group">
                    <label for="komunikasi_id"> 2.	Sejauh ini, menurut Saudara lulusan Fakultas Teknik yang bagaimana yg diperlukan oleh pasar/lapangan kerja? </label>
                    <br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="1"> Urusan administrasi, misal legalisir ijazah<br> 
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="2"> Pencarian informasi lowongan pekerjaan<br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="3"> Pemberian informasi lowongan pekerjaan<br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="4"> Penyelenggaraan kegiatan kerjasama antara Prodi dengan Instansi tempat kerja <br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="5"> Penyelenggaraan kegiatan temu alumni <br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="6"> Pemberian saran/masukan kepada Prodi untuk peningkatan kualitas lulusan <br>
                        <input type="radio"  name="komunikasi_id" id="komunikasi_id" value="7"> Lainnya
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
@include('sweetalert::alert')
</body>
</html>


