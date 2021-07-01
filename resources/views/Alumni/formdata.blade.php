
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
      </div>
    </div>

    <div class="content">
     <h3>Biodata</h3>
     <div class="card card-info card-outline">
       <div class="card-header">
         <div class="card-tools">
           <a href="{{route('data')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>  
         </div>
       </div>  
       <div class="card-body">
       <table class="table table-bordered">
       <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Option</th>           
         </tr>
       @foreach ($dtAlumni as $item)
       <tr>
              <td>  {{$loop->iteration}} . </td>
              <td>  {{ $item->nama }} </td> 
              <td> <a href="{{url('detail', $item->id)}}" class="btn btn-success">Detail</a>
        <a href="{{url('Edit', $item->id)}}" class="btn btn-success">Edit</a></td>
       </tr> 
        @endforeach
       </tabel> 
       </div>
       </div>
    </div>
  </div>
</div>

 
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
