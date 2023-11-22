@include('cinema/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Today's Show</h1>
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
                <h3 class="card-title">View / Manage Today's Show</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/cinema/add-movie-show" class="btn btn-primary">Add More Shows</a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr align="center">
                      <td colspan="10">
                         <b>{{$t3}}</b>
                      </td>                      
                    </tr>
                  <tr>
                    <th>Show ID</th>
                    <th>Movie Name</th>
                    <th>Show Time</th>
                    <th>Screen</th>
                    <th>Date</th>
                    <th>Gold Price</th>
                    <th>Silver Price</th>
                    <th>Platinum Price</th>
                    <th>Edit Show</th>
                    <th>Delete Show</th>
                  </tr>
                  </thead>              

                  @foreach($arr as $movie)
                   <tr>
                    <td>{{$movie->show_id}}</td>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->show_time}}</td>
                    <td>{{$movie->screen}}</td>
                    <td>{{$movie->date}}</td>
                    <td>Rs.{{$movie->gold}}</td>
                    <td>Rs.{{$movie->silver}}</td>
                    <td>Rs.{{$movie->platinum}}</td>
                    <td><a href="/cinema/edit-movie-show-3/{{$movie->show_id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/cinema/view-movie-show-3/{{$movie->show_id}}" class="btn btn-primary">Delete</button></td>
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

@include('cinema/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('cinema/scripts')
