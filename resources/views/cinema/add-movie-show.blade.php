@include('cinema/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Movie Shows</h1>
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
                <h3 class="card-title">Add Movie Shows</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Movie Name</label>
                    <select class="form-control edit_duration" required name="movie">
                      @foreach($arr as $movie)
                      <option value="{{$movie->movie_id}}">{{$movie->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Show Time</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control edit_duration" required name="show_time[]">
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                        </select>
                        <span class="edit_duration_span">Hour &nbsp; :</span>
                        <select class="form-control edit_duration" required name="show_time[]">
                            <option>00</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                            <option>45</option>
                            <option>46</option>
                            <option>47</option>
                            <option>48</option>
                            <option>49</option>
                            <option>50</option>
                            <option>51</option>
                            <option>52</option>
                            <option>53</option>
                            <option>54</option>
                            <option>55</option>
                            <option>56</option>
                            <option>57</option>
                            <option>58</option>
                            <option>59</option>
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
                          @foreach($arr2 as $screen)

                          @for($i=1; $i<=$screen->total_screen; $i++)
                          <option>{{$i}}</option>
                          @endfor

                          @endforeach
                        </select>
                        <span class="edit_duration_span">Screen</span>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Date</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="date">
                            <option>Today</option>
                            <option>Tommorow</option>
                            <option>Day after Tommorow</option>
                            <option>Day after Tommorow + 1</option>
                            <option>Day after Tommorow + 2</option>
                            <option>Day after Tommorow + 3</option>
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
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Gold" name="gold" maxlength="100" required>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400;">Silver :</label>
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Silver" name="silver" maxlength="100" required>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400;">Platinum :</label>
                    <input type="text" class="edit_price_input" id="exampleInputEmail1" placeholder="Price of Plantinum" name="platinum" maxlength="100" required>
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="add_show">
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