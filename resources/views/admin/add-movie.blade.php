@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Slider</h1>
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
                <h3 class="card-title">Add New Movie</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Movie Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Movie" name="name" maxlength="100" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Director Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Director" name="director" maxlength="100" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Language of Movie</label><br>
                    <input type="checkbox" name="language[]" value="Hindi"> Hindi <br> 
                    <input type="checkbox" name="language[]" value="English"> English <br>
                    <input type="checkbox" name="language[]" value="Gujarati"> Gujarati <br>
                    <input type="checkbox" name="language[]" value="Bengali"> Bengali <br>
                    <input type="checkbox" name="language[]" value="Punjabi"> Punjabi <br>
                    <input type="checkbox" name="language[]" value="Marathi"> Marathi <br>
                    <input type="checkbox" name="language[]" value="Telugu"> Telugu <br>
                    <input type="checkbox" name="language[]" value="Tamil"> Tamil <br>
                    <input type="checkbox" name="language[]" value="Kannada"> Kannada <br>
                    <input type="checkbox" name="language[]" value="Odia"> Odia <br>
                    <input type="checkbox" name="language[]" value="Assamese"> Assamese <br>
                    <input type="checkbox" name="language[]" value="Santali"> Santali <br>
                    <input type="checkbox" name="language[]" value="Meitei (Manipuri)"> Meitei (Manipuri) <br>
                    <input type="checkbox" name="details" value="Sanskrit"> Sanskrit
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Movie Duration</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control edit_duration" required name="duration[]">
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
                        </select>
                        <span class="edit_duration_span">Hour &nbsp; :</span>
                        <select class="form-control edit_duration" required name="duration[]">
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
                            <option>60</option>
                        </select>
                        <span class="edit_duration_span">Min</span>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Release Data</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="release_date[]">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
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
                        </select>
                        <select class="form-control" required name="release_date[]">
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                        </select>
                        <select class="form-control" required name="release_date[]">
                            <option>2023</option>
                            <option>2024</option>
                        </select>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">IMDB Rating out of 10.00</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="rating">
                          <?php $i=0.1; while($i<=10.00) { ?>
                            <option><?php echo $i; ?></option>
                          <?php $i=$i+0.1; } ?>
                        </select>
                      </div>
                    </div> 
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Add Image of Movie</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="movie_image" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Current Status of Movie</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" required name="status">
                            <option>Live</option>
                            <option>Close</option>
                            <option>Comming Soon</option>
                            <option>Stop for Some Time</option>
                        </select>
                      </div>
                    </div> 
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit_movie">
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

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')