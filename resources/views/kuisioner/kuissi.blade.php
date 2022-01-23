
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
  <h5 class="mt-4 mb-2"></h5>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kuisioner</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="accordion">
          <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
          <div class="card">
          @foreach ($dtKate as $item)
            <div id="{{'headingOne1' . $item->id}}" class="card-header">
              <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#accordion" data-target="{{'#collapseOne1'. $item->id}}" aria-expanded="true" aria-controls="{{'collapseOne1'. $item->id}}">
                {{$item->kategori}}
                </a>
              </h4>
            </div>
            <div id="{{'collapseOne1'. $item->id}}" aria-labelledby="{{'headingOne1'.$item->id}}" class="collapse">
              <div class="card-body">
              <div class="table-responsive">
              <table class="table">
                  <tr>
                      <th style="width: 1%;"><center>No</center></th>
                      <th><center>Pertanyaan</center></th>
                      <th><center>Aksi</center></th>
                  </tr>
                  @foreach ($item->pertanyaan as $itemtanya)
                  <tr>  
                      <td> <center> {{$loop->iteration}} </center></td> 
                      <td>{{$itemtanya->nama}}</td> 
                      <td><a href="{{url('EditKuis', $itemtanya->id)}}">Edit </a> </td>
                  </tr>
                  @endforeach
              </table>
              </div>
              </div>
            </div>
            @endforeach
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


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>

