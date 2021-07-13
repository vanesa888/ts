
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-12">
            <h1 class="m-0"><center>Welcome to Program Studi S1 Informatika</center></h1>
          <div class="col-12">
          <div class="card">
          <div class="card-body">
          <form action="{{url('penghasilan')}}" method="get">
          {{ csrf_field() }}
          <select name="pilihan_id" id="pilihan_id">
          @foreach($pertanyaan as $item)
          <option value="{{$item->id}}">{{ $item->nama }}</option>
          @endforeach
          </select>
          <div class="form-group">
             <button type="submit" value="submit" class="btn btn-success">show</button>  
           </div>
          </form>
         
         


          </div>
          </div>
          </div>   
          </div>
         </div>
       </div>       
      </div>
    </div>
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
@include('sweetalert::alert')
</body>
</html>
