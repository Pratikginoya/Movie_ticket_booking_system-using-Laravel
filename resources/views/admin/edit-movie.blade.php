@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Slider</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($arr as $movie)
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Movie Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Movie" name="name" maxlength="100" required value="{{$movie->name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Director Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Director" name="director" maxlength="100" required value="{{$movie->director}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Language of Movie</label><br>
                    <input type="checkbox" name="language[]" value="Hindi" @if(str_contains($movie->language, 'Hindi')) checked="checked" @endif> Hindi <br> 
                    <input type="checkbox" name="language[]" value="English" @if(str_contains($movie->language, 'English')) checked="checked" @endif> English <br>
                    <input type="checkbox" name="language[]" value="Gujarati" @if(str_contains($movie->language, 'Gujarati')) checked="checked" @endif> Gujarati <br>
                    <input type="checkbox" name="language[]" value="Bengali" @if(str_contains($movie->language, 'Bengali')) checked="checked" @endif> Bengali <br>
                    <input type="checkbox" name="language[]" value="Punjabi" @if(str_contains($movie->language, 'Punjabi')) checked="checked" @endif> Punjabi <br>
                    <input type="checkbox" name="language[]" value="Marathi" @if(str_contains($movie->language, 'Marathi')) checked="checked" @endif> Marathi <br>
                    <input type="checkbox" name="language[]" value="Telugu" @if(str_contains($movie->language, 'Telugu')) checked="checked" @endif> Telugu <br>
                    <input type="checkbox" name="language[]" value="Tamil" @if(str_contains($movie->language, 'Tamil')) checked="checked" @endif> Tamil <br>
                    <input type="checkbox" name="language[]" value="Kannada" @if(str_contains($movie->language, 'Kannada')) checked="checked" @endif> Kannada <br>
                    <input type="checkbox" name="language[]" value="Odia" @if(str_contains($movie->language, 'Odia')) checked="checked" @endif> Odia <br>
                    <input type="checkbox" name="language[]" value="Assamese" @if(str_contains($movie->language, 'Assamese')) checked="checked" @endif> Assamese <br>
                    <input type="checkbox" name="language[]" value="Santali" @if(str_contains($movie->language, 'Santali')) checked="checked" @endif> Santali <br>
                    <input type="checkbox" name="language[]" value="Meitei (Manipuri)" @if(str_contains($movie->language, 'Meitei (Manipuri)')) checked="checked" @endif> Meitei (Manipuri) <br>
                    <input type="checkbox" name="details" value="Sanskrit" @if(str_contains($movie->language, 'Sanskrit')) checked="checked" @endif> Sanskrit
                  </div>

                  @php
                  $hour = explode(':',$movie->duration);
                  @endphp
                  <div class="form-group">
                    <label for="exampleInputFile">Movie Duration</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control edit_duration" required name="duration[]">
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
                        </select>
                        <span class="edit_duration_span">Hour &nbsp; :</span>
                        <select class="form-control edit_duration" required name="duration[]">
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

                  @php
                  $date = explode('-',$movie->release_date);
                  @endphp
                  <div class="form-group">
                    <label for="exampleInputFile">Release Data</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="release_date[]">
                            <option {{($date[0]=="1")? "selected":""}}>1</option>
                            <option {{($date[0]=="2")? "selected":""}}>2</option>
                            <option {{($date[0]=="3")? "selected":""}}>3</option>
                            <option {{($date[0]=="4")? "selected":""}}>4</option>
                            <option {{($date[0]=="5")? "selected":""}}>5</option>
                            <option {{($date[0]=="6")? "selected":""}}>6</option>
                            <option {{($date[0]=="7")? "selected":""}}>7</option>
                            <option {{($date[0]=="8")? "selected":""}}>8</option>
                            <option {{($date[0]=="9")? "selected":""}}>9</option>
                            <option {{($date[0]=="10")? "selected":""}}>10</option>
                            <option {{($date[0]=="11")? "selected":""}}>11</option>
                            <option {{($date[0]=="12")? "selected":""}}>12</option>
                            <option {{($date[0]=="13")? "selected":""}}>13</option>
                            <option {{($date[0]=="14")? "selected":""}}>14</option>
                            <option {{($date[0]=="15")? "selected":""}}>15</option>
                            <option {{($date[0]=="16")? "selected":""}}>16</option>
                            <option {{($date[0]=="17")? "selected":""}}>17</option>
                            <option {{($date[0]=="18")? "selected":""}}>18</option>
                            <option {{($date[0]=="19")? "selected":""}}>19</option>
                            <option {{($date[0]=="20")? "selected":""}}>20</option>
                            <option {{($date[0]=="21")? "selected":""}}>21</option>
                            <option {{($date[0]=="22")? "selected":""}}>22</option>
                            <option {{($date[0]=="23")? "selected":""}}>23</option>
                            <option {{($date[0]=="24")? "selected":""}}>24</option>
                            <option {{($date[0]=="25")? "selected":""}}>25</option>
                            <option {{($date[0]=="26")? "selected":""}}>26</option>
                            <option {{($date[0]=="27")? "selected":""}}>27</option>
                            <option {{($date[0]=="28")? "selected":""}}>28</option>
                            <option {{($date[0]=="29")? "selected":""}}>29</option>
                            <option {{($date[0]=="30")? "selected":""}}>30</option>
                            <option {{($date[0]=="31")? "selected":""}}>31</option>
                        </select>
                        <select class="form-control" required name="release_date[]">
                            <option {{($date[1]=="Jan")? "selected":""}}>Jan</option>
                            <option {{($date[1]=="Feb")? "selected":""}}>Feb</option>
                            <option {{($date[1]=="March")? "selected":""}}>March</option>
                            <option {{($date[1]=="April")? "selected":""}}>April</option>
                            <option {{($date[1]=="May")? "selected":""}}>May</option>
                            <option {{($date[1]=="June")? "selected":""}}>June</option>
                            <option {{($date[1]=="July")? "selected":""}}>July</option>
                            <option {{($date[1]=="Aug")? "selected":""}}>Aug</option>
                            <option {{($date[1]=="Sep")? "selected":""}}>Sep</option>
                            <option {{($date[1]=="Oct")? "selected":""}}>Oct</option>
                            <option {{($date[1]=="Nov")? "selected":""}}>Nov</option>
                            <option {{($date[1]=="Dec")? "selected":""}}>Dec</option>
                        </select>
                        <select class="form-control" required name="release_date[]">
                            <option {{($date[2]=="2023")? "selected":""}}>2023</option>
                            <option {{($date[2]=="2024")? "selected":""}}>2024</option>
                        </select>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">IMDB Rating out of 10.00</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="rating">
                            <option {{($movie->rating==0.1)? "selected":""}}>0.1</option>
                            <option {{($movie->rating==0.2)? "selected":""}}>0.2</option>
                            <option {{($movie->rating==0.3)? "selected":""}}>0.3</option>
                            <option {{($movie->rating==0.4)? "selected":""}}>0.4</option>
                            <option {{($movie->rating==0.5)? "selected":""}}>0.5</option>
                            <option {{($movie->rating==0.6)? "selected":""}}>0.6</option>
                            <option {{($movie->rating==0.7)? "selected":""}}>0.7</option>
                            <option {{($movie->rating==0.8)? "selected":""}}>0.8</option>
                            <option {{($movie->rating==0.9)? "selected":""}}>0.9</option>
                            <option {{($movie->rating==1)? "selected":""}}>1</option>
                            <option {{($movie->rating==1.1)? "selected":""}}>1.1</option>
                            <option {{($movie->rating==1.2)? "selected":""}}>1.2</option>
                            <option {{($movie->rating==1.3)? "selected":""}}>1.3</option>
                            <option {{($movie->rating==1.4)? "selected":""}}>1.4</option>
                            <option {{($movie->rating==1.5)? "selected":""}}>1.5</option>
                            <option {{($movie->rating==1.6)? "selected":""}}>1.6</option>
                            <option {{($movie->rating==1.7)? "selected":""}}>1.7</option>
                            <option {{($movie->rating==1.8)? "selected":""}}>1.8</option>
                            <option {{($movie->rating==1.9)? "selected":""}}>1.9</option>
                            <option {{($movie->rating==2)? "selected":""}}>2</option>
                            <option {{($movie->rating==2.1)? "selected":""}}>2.1</option>
                            <option {{($movie->rating==2.2)? "selected":""}}>2.2</option>
                            <option {{($movie->rating==2.3)? "selected":""}}>2.3</option>
                            <option {{($movie->rating==2.4)? "selected":""}}>2.4</option>
                            <option {{($movie->rating==2.5)? "selected":""}}>2.5</option>
                            <option {{($movie->rating==2.6)? "selected":""}}>2.6</option>
                            <option {{($movie->rating==2.7)? "selected":""}}>2.7</option>
                            <option {{($movie->rating==2.8)? "selected":""}}>2.8</option>
                            <option {{($movie->rating==2.9)? "selected":""}}>2.9</option>
                            <option {{($movie->rating==3)? "selected":""}}>3</option>
                            <option {{($movie->rating==3.1)? "selected":""}}>3.1</option>
                            <option {{($movie->rating==3.2)? "selected":""}}>3.2</option>
                            <option {{($movie->rating==3.3)? "selected":""}}>3.3</option>
                            <option {{($movie->rating==3.4)? "selected":""}}>3.4</option>
                            <option {{($movie->rating==3.5)? "selected":""}}>3.5</option>
                            <option {{($movie->rating==3.6)? "selected":""}}>3.6</option>
                            <option {{($movie->rating==3.7)? "selected":""}}>3.7</option>
                            <option {{($movie->rating==3.8)? "selected":""}}>3.8</option>
                            <option {{($movie->rating==3.9)? "selected":""}}>3.9</option>
                            <option {{($movie->rating==4)? "selected":""}}>4</option>
                            <option {{($movie->rating==4.1)? "selected":""}}>4.1</option>
                            <option {{($movie->rating==4.2)? "selected":""}}>4.2</option>
                            <option {{($movie->rating==4.3)? "selected":""}}>4.3</option>
                            <option {{($movie->rating==4.4)? "selected":""}}>4.4</option>
                            <option {{($movie->rating==4.5)? "selected":""}}>4.5</option>
                            <option {{($movie->rating==4.6)? "selected":""}}>4.6</option>
                            <option {{($movie->rating==4.7)? "selected":""}}>4.7</option>
                            <option {{($movie->rating==4.8)? "selected":""}}>4.8</option>
                            <option {{($movie->rating==4.9)? "selected":""}}>4.9</option>
                            <option {{($movie->rating==2)? "selected":""}}>5</option>
                            <option {{($movie->rating==5.1)? "selected":""}}>5.1</option>
                            <option {{($movie->rating==5.2)? "selected":""}}>5.2</option>
                            <option {{($movie->rating==5.3)? "selected":""}}>5.3</option>
                            <option {{($movie->rating==5.4)? "selected":""}}>5.4</option>
                            <option {{($movie->rating==5.5)? "selected":""}}>5.5</option>
                            <option {{($movie->rating==5.6)? "selected":""}}>5.6</option>
                            <option {{($movie->rating==5.7)? "selected":""}}>5.7</option>
                            <option {{($movie->rating==5.8)? "selected":""}}>5.8</option>
                            <option {{($movie->rating==5.9)? "selected":""}}>5.9</option>
                            <option {{($movie->rating==6)? "selected":""}}>6</option>
                            <option {{($movie->rating==6.1)? "selected":""}}>6.1</option>
                            <option {{($movie->rating==6.2)? "selected":""}}>6.2</option>
                            <option {{($movie->rating==6.3)? "selected":""}}>6.3</option>
                            <option {{($movie->rating==6.4)? "selected":""}}>6.4</option>
                            <option {{($movie->rating==6.5)? "selected":""}}>6.5</option>
                            <option {{($movie->rating==6.6)? "selected":""}}>6.6</option>
                            <option {{($movie->rating==6.7)? "selected":""}}>6.7</option>
                            <option {{($movie->rating==6.8)? "selected":""}}>6.8</option>
                            <option {{($movie->rating==6.9)? "selected":""}}>6.9</option>
                            <option {{($movie->rating==7)? "selected":""}}>7</option>
                            <option {{($movie->rating==7.1)? "selected":""}}>7.1</option>
                            <option {{($movie->rating==7.2)? "selected":""}}>7.2</option>
                            <option {{($movie->rating==7.3)? "selected":""}}>7.3</option>
                            <option {{($movie->rating==7.4)? "selected":""}}>7.4</option>
                            <option {{($movie->rating==7.5)? "selected":""}}>7.5</option>
                            <option {{($movie->rating==7.6)? "selected":""}}>7.6</option>
                            <option {{($movie->rating==7.7)? "selected":""}}>7.7</option>
                            <option {{($movie->rating==7.8)? "selected":""}}>7.8</option>
                            <option {{($movie->rating==7.9)? "selected":""}}>7.9</option>
                            <option {{($movie->rating==8)? "selected":""}}>8</option>
                            <option {{($movie->rating==8.1)? "selected":""}}>8.1</option>
                            <option {{($movie->rating==8.2)? "selected":""}}>8.2</option>
                            <option {{($movie->rating==8.3)? "selected":""}}>8.3</option>
                            <option {{($movie->rating==8.4)? "selected":""}}>8.4</option>
                            <option {{($movie->rating==8.5)? "selected":""}}>8.5</option>
                            <option {{($movie->rating==8.6)? "selected":""}}>8.6</option>
                            <option {{($movie->rating==8.7)? "selected":""}}>8.7</option>
                            <option {{($movie->rating==8.8)? "selected":""}}>8.8</option>
                            <option {{($movie->rating==8.9)? "selected":""}}>8.9</option>
                            <option {{($movie->rating==9)? "selected":""}}>9</option>
                            <option {{($movie->rating==9.1)? "selected":""}}>9.1</option>
                            <option {{($movie->rating==9.2)? "selected":""}}>9.2</option>
                            <option {{($movie->rating==9.3)? "selected":""}}>9.3</option>
                            <option {{($movie->rating==9.4)? "selected":""}}>9.4</option>
                            <option {{($movie->rating==9.5)? "selected":""}}>9.5</option>
                            <option {{($movie->rating==9.6)? "selected":""}}>9.6</option>
                            <option {{($movie->rating==9.7)? "selected":""}}>9.7</option>
                            <option {{($movie->rating==9.8)? "selected":""}}>9.8</option>
                            <option {{($movie->rating==9.9)? "selected":""}}>9.9</option>
                            <option {{($movie->rating==10)? "selected":""}}>10</option>
                        </select>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Select New Image of Slider</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="movie_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <label for="exampleInputFile">Current Image of Slider</label>
                  <div style="width: 350px; height: 200px;">
                      <img src="{{asset('site_images/'.$movie->movie_image)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Current Status of Movie</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="status">
                            <option {{($movie->status=="Live")? "selected":""}}>Live</option>
                            <option {{($movie->status=="Stop")? "selected":""}}>Stop</option>
                        </select>
                      </div>
                    </div> 
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_movie" value="Submit">
                </div>
              </form>
              @endforeach
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