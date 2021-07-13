
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
    <div class="content">
    <div class="card card-info card-outline">
      <h3><center> Jawaban </center></h3>  
       <div class="card-body">
         <form action="{{route('simpan-jawk', $dtTan->id)}}" method="post">
               {{ csrf_field() }}
          @foreach ($dtTan as $item)
           <div class="form-group">
           <h6>Jawaban</h6>
           @foreach ($item->jawaban as $itemjaw)
             <select class="form-control select2" style="width: 100%;" name="jawaban_id" id="jawaban_id">
             <option value= "{{$itemjaw->id}}">{{$item->jawaban}}</option>
             </select>
           @endforeach
           </div> 
           @endforeach
           <div class="form-group">
             <button type="submit" class="btn btn-success">Simpan Data</button>  
           </div>  
         </form>
       </div>
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


