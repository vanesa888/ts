
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
              <li class="breadcrumb-item active">Jawaban</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
     <h3>Jawaban</h3>
     <div class="card card-info card-outline">
       <div class="card-header">
         <div class="card-tools">
           <a href="{{route('jawaban')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>  
         </div>
       </div> 
       <div class="card-body">
         <table class="table table-bordered">
         <tr>
            <th>No</th>
            <th>Jawaban</th>
            <th>Keterangan</th>
         </tr>
         @foreach ($dtJawaban as $item)
         <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->pilihjawab }}</td>  
            <td><a href="{{url('EditJaw', $item->id)}}">Edit</a></td>
         </tr>
         @endforeach
         </table>   
       </div>
    </div>
    </div>
    </div>
    <!-- /.content-header >
    < /.content -->
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
