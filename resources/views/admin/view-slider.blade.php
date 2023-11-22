@include('admin/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Data of Sliders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View/Manage data of Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Titel of Slider</th>
                    <th>Image</th>
                    <th>Edit Data</th>
                    <th>Delete Data</th>
                  </tr>
                  </thead>              

                  @foreach($arr as $slider)
                   <tr>
                    <td>{{$slider->title}}</td>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('site_images/'.$slider->image)}}" style="height: 100%; width: 100%; object-fit: cover;"></td></div>
                    </td>
                    <td><a href="/admin/edit-slider/{{$slider->id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/admin/view-slider/{{$slider->id}}" class="btn btn-primary">Delete</button></td>
                  </tr>
                  @endforeach

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')
