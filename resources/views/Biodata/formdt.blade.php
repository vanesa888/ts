
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('tamplate.haed')
</head>
<body>
@include('tamplate.navbar')
  <!-- /.navbar -->

  @include('tamplate.sidebar')
  <div class="content-wrapper">
    <div class="content">
     <div class="card card-info card-outline">

      <h3><center> Biodata </center></h3>  
       <div class="card-body">
        <form action="{{route('simpan-data')}}" method="post">  
               {{ csrf_field() }}
           <div class="form-group">
           <h6>Nama</h6>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
           </div> 
           <div class="form-group">
           <h6>Jenis Kelamin</h6>
				   <select class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Kategori">
              <option hidden>Pilih</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
           </select> 
           </div> 
           <div class="form-group">
           <h6>Tempat Lahir</h6>
              <input type="text" id="lahir" name="lahir" class="form-control" placeholder="Tempat Lahir">
           </div> 
           <div class="form-group">
           <h6>Tanggal Lahir</h6>
              <input type="date" id="lahir_tgl" name="lahir_tgl" class="form-control" placeholder="Tanggal Lahir">
           </div> 
           <div class="form-group">
           <h6>Status Perkawinan</h6>
              <input type="text" id="statusnikah" name="statusnikah" class="form-control" placeholder="Status Perkawinan">
           </div> 
           <div class="form-group">
           <h6>No Handphone</h6>
              <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No Handphone">
           </div> 
           <div class="form-group">
           <h6>Email</h6>
              <input type="text" id="email" name="email" class="form-control" placeholder="email">
           </div> 
           <div class="form-group">
           <h6>Alamat Asal</h6>
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
           </div> 
           <div class="form-group">
           <h6>Alamat Terakhir</h6>
              <input type="text" id="alamatT" name="alamatT" class="form-control" placeholder="Alamat Terakhir">
           </div> 
           <div class="form-group">
           <h6>Pendidikan Terakhir</h6>
           <select class="form-control" id="peter" name="peter" placeholder="Pendidikan Terakhir">
              <option hidden>S1 Informatika</option>
              <option>S1 Informatika</option>
              <option>S2 . . .</option>
              <option>S3 . . .</option>
              </select> 
           </div> 
           <div class="form-group">
           <h6>Tahun Masuk</h6>
				   <select class="form-control" id="tmasuk" name="tmasuk" placeholder="Tahun Masuk">
              <option hidden>Pilih</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              </select> 
           </div> 
           <div class="form-group">
           <h6>Tahun Lulus</h6>
           <select class="form-control" id="lulus" name="lulus" placeholder="Tahun Lulus" required oninvalid="this.setCustomValidity('Masukan Tanggal Lulus')"
          oninput="this.setCustomValidity('')">
             <option hidden>Pilih Tahun Lulus </option>
              <option>2019-2020</option>
              <option>2020-2021</option>
              <option>2021-2022</option>
              </select> 
           </div> 
           <div class="form-group">
           <h6>Lama Studi</h6>
              <input type="text" id="tlama" name="tlama" class="form-control" placeholder="Lama Studi">
           </div>
           <div class="form-group">
           <h6>IPK</h6>
              <input type="text" id="ipk" name="ipk" class="form-control" placeholder="Lama Studi">
           </div>
           <div class="form-group">
                    <label for="masatunggu_id"> Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</label>
                    <br>
                        <input type="radio" name="masatunggu_id" id="masatunggu_id" value="1">  > 1 Tahun 
                        <input type="radio" name="masatunggu_id" id="masatunggu_id" value="2">  6-12 Bulan   
                        <input type="radio" name="masatunggu_id" id="masatunggu_id" value="3">  4-5 bulan
                        <input type="radio" name="masatunggu_id" id="masatunggu_id" value="4">  3 bulan 
                        <input type="radio" name="masatunggu_id" id="masatunggu_id" value="5">  1-2 bulan          
              </div>
           <div class="form-group">
             <button type="submit" class="btn btn-success">Simpan Data</button>  
           </div>  
         </form>
        </div>  
       </div>
    </div>
   </div>

  <!-- /.content-wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
