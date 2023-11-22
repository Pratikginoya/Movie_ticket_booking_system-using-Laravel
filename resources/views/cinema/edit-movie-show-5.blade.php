@include('cinema/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Movie Shows</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@foreach($arr2 as $show)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Movie Shows</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Movie Name</label>
                    <select class="form-control" required name="movie">
                      @foreach($arr as $movie)
                      <option value="{{$movie->movie_id}}"  {{($show->m_id==$movie->movie_id)? "selected":""}}>{{$movie->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  @php
                  $hour = explode(':',$show->show_time);
                  @endphp
                  <div class="form-group">
                    <label for="exampleInputFile">Show Time</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control edit_duration" required name="show_time[]">
                            <option {{($hour[0]=="01")? "selected":""}}>01</option>
                            <option {{($hour[0]=="02")? "selected":""}}>02</option>
                            <option {{($hour[0]=="03")? "selected":""}}>03</option>
                            <option {{($hour[0]=="04")? "selected":""}}>04</option>
                            <option {{($hour[0]=="05")? "selected":""}}>05</option>
                            <option {{($hour[0]=="06")? "selected":""}}>06</option>
                            <option {{($hour[0]=="07")? "selected":""}}>07</option>
                            <option {{($hour[0]=="08")? "selected":""}}>08</option>
                            <option {{($hour[0]=="09")? "selected":""}}>09</option>
                            <option {{($hour[0]=="10")? "selected":""}}>10</option>
                            <option {{($hour[0]=="11")? "selected":""}}>11</option>
                            <option {{($hour[0]=="12")? "selected":""}}>12</option>
                            <option {{($hour[0]=="13")? "selected":""}}>13</option>
                            <option {{($hour[0]=="14")? "selected":""}}>14</option>
                            <option {{($hour[0]=="15")? "selected":""}}>15</option>
                            <option {{($hour[0]=="16")? "selected":""}}>16</option>
                            <option {{($hour[0]=="17")? "selected":""}}>17</option>
                            <option {{($hour[0]=="18")? "selected":""}}>18</option>
                            <option {{($hour[0]=="19")? "selected":""}}>19</option>
                            <option {{($hour[0]=="20")? "selected":""}}>20</option>
                            <option {{($hour[0]=="21")? "selected":""}}>21</option>
                            <option {{($hour[0]=="22")? "selected":""}}>22</option>
                            <option {{($hour[0]=="23")? "selected":""}}>23</option>
                            <option {{($hour[0]=="24")? "selected":""}}>24</option>
                        </select>
                        <span class="edit_duration_span">Hour &nbsp; :</span>
                        <select class="form-control edit_duration" required name="show_time[]">
                            <option {{($hour[1]=="00")? "selected":""}}>00</option>
                            <option {{($hour[1]=="01")? "selected":""}}>01</option>
                            <option {{($hour[1]=="02")? "selected":""}}>02</option>
                            <option {{($hour[1]=="03")? "selected":""}}>03</option>
                            <option {{($hour[1]=="04")? "selected":""}}>04</option>
                            <option {{($hour[1]=="05")? "selected":""}}>05</option>
                            <option {{($hour[1]=="06")? "selected":""}}>06</option>
                            <option {{($hour[1]=="07")? "selected":""}}>07</option>
                            <option {{($hour[1]=="08")? "selected":""}}>08</option>
                            <option {{($hour[1]=="09")? "selected":""}}>09</option>
                            <option {{($hour[1]=="10")? "selected":""}}>10</option>
                            <option {{($hour[1]=="11")? "selected":""}}>11</option>
                            <option {{($hour[1]=="12")? "selected":""}}>12</option>
                            <option {{($hour[1]=="13")? "selected":""}}>13</option>
                            <option {{($hour[1]=="14")? "selected":""}}>14</option>
                            <option {{($hour[1]=="15")? "selected":""}}>15</option>
                            <option {{($hour[1]=="16")? "selected":""}}>16</option>
                            <option {{($hour[1]=="17")? "selected":""}}>17</option>
                            <option {{($hour[1]=="18")? "selected":""}}>18</option>
                            <option {{($hour[1]=="19")? "selected":""}}>19</option>
                            <option {{($hour[1]=="20")? "selected":""}}>20</option>
                            <option {{($hour[1]=="21")? "selected":""}}>21</option>
                            <option {{($hour[1]=="22")? "selected":""}}>22</option>
                            <option {{($hour[1]=="23")? "selected":""}}>23</option>
                            <option {{($hour[1]=="24")? "selected":""}}>24</option>
                            <option {{($hour[1]=="25")? "selected":""}}>25</option>
                            <option {{($hour[1]=="26")? "selected":""}}>26</option>
                            <option {{($hour[1]=="27")? "selected":""}}>27</option>
                            <option {{($hour[1]=="28")? "selected":""}}>28</option>
                            <option {{($hour[1]=="29")? "selected":""}}>29</option>
                            <option {{($hour[1]=="30")? "selected":""}}>30</option>
                            <option {{($hour[1]=="31")? "selected":""}}>31</option>
                            <option {{($hour[1]=="32")? "selected":""}}>32</option>
                            <option {{($hour[1]=="33")? "selected":""}}>33</option>
                            <option {{($hour[1]=="34")? "selected":""}}>34</option>
                            <option {{($hour[1]=="35")? "selected":""}}>35</option>
                            <option {{($hour[1]=="36")? "selected":""}}>36</option>
                            <option {{($hour[1]=="37")? "selected":""}}>37</option>
                            <option {{($hour[1]=="38")? "selected":""}}>38</option>
                            <option {{($hour[1]=="39")? "selected":""}}>39</option>
                            <option {{($hour[1]=="40")? "selected":""}}>40</option>
                            <option {{($hour[1]=="41")? "selected":""}}>41</option>
                            <option {{($hour[1]=="42")? "selected":""}}>42</option>
                            <option {{($hour[1]=="43")? "selected":""}}>43</option>
                            <option {{($hour[1]=="44")? "selected":""}}>44</option>
                            <option {{($hour[1]=="45")? "selected":""}}>45</option>
                            <option {{($hour[1]=="46")? "selected":""}}>46</option>
                            <option {{($hour[1]=="47")? "selected":""}}>47</option>
                            <option {{($hour[1]=="48")? "selected":""}}>48</option>
                            <option {{($hour[1]=="49")? "selected":""}}>49</option>
                            <option {{($hour[1]=="50")? "selected":""}}>50</option>
                            <option {{($hour[1]=="51")? "selected":""}}>51</option>
                            <option {{($hour[1]=="52")? "selected":""}}>52</option>
                            <option {{($hour[1]=="53")? "selected":""}}>53</option>
                            <option {{($hour[1]=="54")? "selected":""}}>54</option>
                            <option {{($hour[1]=="55")? "selected":""}}>55</option>
                            <option {{($hour[1]=="56")? "selected":""}}>56</option>
                            <option {{($hour[1]=="57")? "selected":""}}>57</option>
                            <option {{($hour[1]=="58")? "selected":""}}>58</option>
                            <option {{($hour[1]=="59")? "selected":""}}>59</option>
                        </select>
                        <span class="edit_duration_span">Min</span>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Screen Number</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control edit_duration" required name="screen">
                          @foreach($arr3 as $screen)

                          @for($i=1; $i<=$screen->total_screen; $i++)
                          <option {{($show->screen==$i)? "selected":""}}>{{$i}}</option>
                          @endfor

                          @endforeach
                        </select>
                        <span class="edit_duration_span">Screen</span>
                      </div>
                    </div> 
                  </div>

                  @php

                  date_default_timezone_set('Asia/Kolkata');

                  $today1 = date('d-M');
                  $today2 = date('d-M',strtotime('+1 day'));
                  $today3 = date('d-M',strtotime('+2 day'));
                  $today4 = date('d-M',strtotime('+3 day'));
                  $today5 = date('d-M',strtotime('+4 day'));
                  $today6 = date('d-M',strtotime('+5 day'));

                  @endphp
                  <div class="form-group">
                    <label for="exampleInputFile">Date</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="date">
                            <option {{($show->date==$today1)? "selected":""}}>Today</option>
                            <option {{($show->date==$today2)? "selected":""}}>Tommorow</option>
                            <option {{($show->date==$today3)? "selected":""}}>Day after Tommorow</option>
                            <option {{($show->date==$today4)? "selected":""}}>Day after Tommorow + 1</option>
                            <option {{($show->date==$today5)? "selected":""}}>Day after Tommorow + 2</option>
                            <option {{($show->date==$today6)? "selected":""}}>Day after Tommorow + 3</option>
                        </select>
                      </div>
                    </div> 
                  </div>

                  <div style="margin-bottom: 50px;"></div>
                  <div class="form-group">
                    <label for="exampleInputFile">Price</label>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400;">Gold :</label>
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Gold" name="gold" maxlength="100" required value="{{$show->gold}}">
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400;">Silver :</label>
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Silver" name="silver" maxlength="100" required value="{{$show->silver}}">
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400;">Platinum :</label>
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Plantinum" name="platinum" maxlength="100" required value="{{$show->platinum}}">
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_show">
                </div>
              </form>
            </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endforeach
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