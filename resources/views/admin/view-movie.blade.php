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
                <h3 class="card-title">View / Manage Details of Movie</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Movie Name</th>
                    <th>Director</th>
                    <th>Languages of Movie</th>
                    <th>Duration of Movie</th>
                    <th>Release Date</th>
                    <th>IMDB Rating</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit Data</th>
                    <th>Delete Data</th>
                  </tr>
                  </thead>              

                  @foreach($arr as $movie)
                   <tr>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->director}}</td>
                    <td>{{$movie->language}}</td>
                    <td>{{$movie->duration}}</td>
                    <td>{{$movie->release_date}}</td>
                    <td>{{$movie->rating}}/10</td>
                    <td align="center">
                         <div style="width: 200px; height: 100px;"><img src="{{asset('site_images/'.$movie->movie_image)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: center;"></td></div>
                    </td>
                    <td>{{$movie->status}}</td>
                    <td><a href="/admin/edit-movie/{{$movie->movie_id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/admin/view-movie/{{$movie->movie_id}}" class="btn btn-primary">Delete</button></td>
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
