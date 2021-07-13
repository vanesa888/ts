
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
              <li class="breadcrumb-item active">Edit Pertanyaan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
     <div class="card card-info card-outline">
      <h3><center> Edit Pertanyaan </center></h3>  
       <div class="card-body">

       <form action="{{url('update-Tanya', $pt->id)}}" method="post">  
               {{ csrf_field() }}
           <div class="card-body">
           <div class="form-group">
           <h6>Kategori</h6>
              <input type="text" id="kategori_id" name="kategori_id" class="form-control" placeholder="Kategori" value="{{ $pt->kategori->kategori }}">
           </div> 
           <h6>Pertanyaan</h6>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Pertanyaan" value="{{ $pt->nama }}">
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
