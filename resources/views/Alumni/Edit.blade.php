
<!DOCTYPE html>
<html lang="en">
<head>
 @include('tamplate.haed')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('tamplate.navbar')

@include('tamplate.sidebar')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{asset('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Biodata</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
     <div class="card card-info card-outline">
      <h3><center> Biodata </center></h3>  
       <div class="card-body">

       <form action="{{url('update-data', $Alm->id)}}" method="post">  
               {{ csrf_field() }}
           <div class="form-group">
           <h6>Nama</h6>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $Alm->nama }}" oninvalid="this.setCustomValidity('Masukan Nama')"
          oninput="this.setCustomValidity('')">
           </div> 
           <div class="form-group">
           <h6>Jenis Kelamin</h6>
				   <select class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Jenis Kelamin" value="{{ $Alm->jeniskelamin }}" oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')" >
               <option hidden>Pilih Jenis Kelamin</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
           </select> 
           </div> 
           <div class="form-group">
           <h6>Tempat Lahir</h6>
              <input type="text" id="lahir" name="lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $Alm->lahir }}" oninvalid="this.setCustomValidity('Masukan Tempat Lahir')"
          oninput="this.setCustomValidity('')">
           </div> 
           <div class="form-group">
           <h6>Tanggal Lahir</h6>
              <input type="date" id="lahir_tgl" name="lahir_tgl" class="form-control" placeholder="Tanggal Lahir" value="{{ $Alm->lahir_tgl }}" oninvalid="this.setCustomValidity('Masukan Tanggal Lulus')"
          oninput="this.setCustomValidity('')">
           </div> 
           <div class="form-group">
           <h6>Status Perkawinan</h6>
           <select class="form-control" id="statusnikah" name="statusnikah" placeholder="Status Pernikahan" value="{{ $Alm->statusnikah }}" required>
              <option hidden>Pilih</option>
              <option>Sudah Menikah</option>
              <option>Belum Menikah</option>
           </select> 
           </div> 
           <div class="form-group">
           <h6>No Handphone</h6>
              <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No Handphone" value="{{ $Alm->nohp }}" required>
           </div> 
           <div class="form-group">
           <h6>Email</h6>
              <input type="text" id="email" name="email" class="form-control" placeholder="email" value="{{ $Alm->email }}" required>
           </div> 
           <div class="form-group">
           <h6>Alamat Asal</h6>
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="{{ $Alm->alamat }}" required oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')">
           </div> 
           <div class="form-group">
           <h6>Alamat Terakhir</h6>
              <input type="text" id="alamatT" name="alamatT" class="form-control" placeholder="Alamat Terakhir" value="{{ $Alm->alamatT }}" required oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')">
           </div> 
           <div class="form-group">
           <h6>Pendidikan Terakhir</h6>
           <select class="form-control" id="peter" name="peter" placeholder="Pendidikan Terakhir" value="{{ $Alm->peter }}" required>
              <option hidden>Pilih</option>
              <option>S1</option>
              <option>S2</option>
              <option>S3</option>
           </select> 
           </div> 
           <div class="form-group">
           <h6>Tahun Masuk</h6>
				   <select class="form-control" id="tmasuk" name="tmasuk" placeholder="Tahun Masuk"  value="{{ $Alm->tmasuk }}" required oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')">
              <option hidden>Pilih</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              </select> 
           </div> 
           <div class="form-group">
           <h6>Tahun Lulus</h6>
           <select class="form-control" id="lulus" name="lulus" placeholder="Tahun Lulus" value="{{ $Alm->lulus }}" required oninvalid="this.setCustomValidity('Masukan Tanggal Lulus')"
          oninput="this.setCustomValidity('')">
             <option hidden>Pilih Tahun Lulus </option>
              <option>2019-2020</option>
              <option>2020-2021</option>
              <option>2021-2022</option>
              </select> 
           </div> 
           <div class="form-group">
           <h6>Lama Studi</h6>
              <input type="text" id="tlama" name="tlama" class="form-control" placeholder="Lama Studi" value="{{ $Alm->tlama }}" required oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')">
           </div>
           <div class="form-group">
           <h6>IPK</h6>
              <input type="text" id="ipk" name="ipk" class="form-control" placeholder="IPK" value="{{ $Alm->ipk }}" required oninvalid="this.setCustomValidity('Masukan Jenis Kelamin')"
          oninput="this.setCustomValidity('')">
           </div>
           <div class="form-group">
                    <label for="masatunggu_id" value="{{ $Alm->masatunggu_id }}" required> Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</label>
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
 <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  @include('tamplate.footer')
 </div>


<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>
