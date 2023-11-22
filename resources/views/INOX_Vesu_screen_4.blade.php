<?php

$conn = mysqli_connect('localhost','root','','movie_ticket_booking_system');

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Tickets</title>
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/compact_util.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/material-icon-outlined.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
    <link href="{{asset('css/booking.css')}}" rel="stylesheet">
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <meta name="theme-color" content="#1a237e">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script type="text/javascript">

</script>

<body class="gilmer-font bg-light" onload="generate_table(); initClock()">
    <!--Header Start-->
    <header class="navbar p-t-5 p-b-5 shadow-bottom fixed-top navbar-expand-md navbar-dark bd-navbar bg-purple">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class=" navbar-brand me-2 f-w-600" id="page-title" href="/" aria-label="Bootstrap">
                <img src="{{asset('images/favicon.png')}}" class="width-50 "> MoviesYet
            </a>
           
        </nav>
    </header>
    <!--Header End-->
    <!--Gap-->
    <div class="p-b-100"></div>
    <!--Gap end-->
    <!--Main Content Start-->
    <style>

        </style>
@foreach($arr2 as $details)
    <div class="container text-dark ">
        
        <h3 id="h3">
            <table>
                @php
                $c_id = $details->user_id;
                $select = "select * from cinema_register where cinema_id=$c_id";
                $data = mysqli_query($conn,$select);
                $row = mysqli_fetch_assoc($data);
                @endphp
                <tr>
                    <td style="font-weight: 600; font-size: 22px;" height="50">
                        {{$row['th_name']}}:{{$row['shopping']}}, {{$row['location']}}
                    </td>
                </tr>
            </table>

        </h3>

        <table class="f-s-15">
            
            <tr>
                <td><img src="{{asset('images/svg/icons8_theatre_curtain.svg')}}" class="m-w-30"><b> Screen no </b></td>
                <td> : {{$details->screen}}</td>
            </tr>

            <tr>
                <td><img src="{{asset('images/svg/icons8_theatre_curtain.svg')}}" class="m-w-30"><b> Show Time </b></td>
                <td> : {{$details->show_time}}</td>
            </tr>

                @php
                $m_id = $details->m_id;
                $select = "select * from movie where movie_id=$m_id";
                $data = mysqli_query($conn,$select);
                $row = mysqli_fetch_assoc($data);
                @endphp
            <tr>
                <td><img src="{{asset('images/svg/dvd_logo.svg')}}" class="m-w-30"> <b> Movie </b></td>
                <td> : {{$row['name']}}</td>
            </tr>
            
            </tr>
            <td colspan="2" id="ticket_close_soon" class="bg-info " style="display: none;">
                <img src="images/svg/icons8_warning.svg" class="m-w-40 m-h-30">Closing Soon
            </td>
            <td colspan="2" id="ticket_closed" class="bg-danger text-light" style="display: none;">
                <img src="images/svg/icons8_warning.svg" class="m-w-40 m-h-30">Tickets Closed
            </td>
            </tr>
            
        </table>
        <!-- Button trigger modal -->
        <button onclick="load_res()" class="padding-1 col-lg-2"
            style="right: 0%; position: absolute; border: 0px;background: none;" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <img class="m-w-35 " style="vertical-align:bottom;" src="{{asset('images/svg/icons8_shopping_cart_1.svg')}}">
            Checkout
        </button>
        </div>

    <div class="screen_main">
        <div class="screen">
            <h5 class="text-center seat_area_name">Gold (Rs.{{$details->gold}})</h5>
            <div class="seats">
                <div onclick="" >A</div>
                <?php for($i=1; $i<=20; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >B</div>
                <?php for($i=21; $i<=40; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-20; ?></div>
                <?php } ?>
            </div>

            <h5 class="text-center seat_area_name">Silver (Rs.{{$details->silver}})</h5>
            <div class="seats">
                <div onclick="" >C</div>
                <?php for($i=41; $i<=60; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-40; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >D</div>
                <?php for($i=61; $i<=80; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-60; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >E</div>
                <?php for($i=81; $i<=100; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-80; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >F</div>
                <?php for($i=101; $i<=120; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-100; ?></div>
                <?php } ?>
            </div>

            <h5 class="text-center seat_area_name">Platinum (Rs.{{$details->platinum}})</h5>
            <div class="seats">
                <div onclick="" >G</div>
                <?php for($i=121; $i<=140; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-120; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >H</div>
                <?php for($i=141; $i<=160; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-140; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >I</div>
                <?php for($i=161; $i<=180; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-160; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >J</div>
                <?php for($i=181; $i<=200; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-180; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >K</div>
                <?php for($i=201; $i<=220; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-200; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >L</div>
                <?php for($i=221; $i<=240; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-220; ?></div>
                <?php } ?>
            </div>
            <div class="seats">
                <div onclick="" >M</div>
                <?php for($i=241; $i<=260; $i++) { ?>
                    <div onclick="seat(<?php echo $i; ?>)" id="<?php echo $i; ?>"><?php echo $i-240; ?></div>
                <?php } ?>
            </div>
        
            <div class="screen_design">
                <div class="screen_design_peta">screen</div>
            </div>
@endforeach
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Checkout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-title">
                        No seat selected
                    </div>

                    <form method="post">
                        @csrf
                        <div class="modal-body">
                            @foreach($arr2 as $data)
                            <input type="hidden" name="screen_no" value="{{$data->screen}}">
                            <input type="hidden" name="show_id" value="{{$data->show_id}}">
                            <input type="hidden" id="data_seat_id" name="seat_id">
                            <input type="hidden" id="data_seat_no" name="seat_no">
                            <input type="hidden" name="gold" value="{{$data->gold}}">
                            <input type="hidden" name="silver" value="{{$data->silver}}">
                            <input type="hidden" name="platinum" value="{{$data->platinum}}">
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="book_seat" class="btn btn-primary" value="Proceed">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="images/svg/icons8_warning.svg" class="m-w-60 m-h-60">
                        
                    </div>
                    <div class="modal-body" id="modal-title">
                        All seats are Booked
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
          </div>


        <div id="screen" class="m-t-70">
        </div>
    </div>
    <!-- Button trigger modal -->

    <div class="container">

    </div>
    <footer class="p-t-10 p-b-10"
        style="position:fixed;bottom: 0px;background-color: rgb(221, 216, 216); width: 100%;text-align: center; box-shadow: 0px -1px 5px grey;">
        <span class="border-1">
            <span class="white_description"></span> Available
        </span>
        <span class="border-1">
            <span class="gray_description"></span> Booked
        </span>
        <span class="border-1">
            <span class="red_description"></span>
            Not Available
        </span>
        <span class="border-1">
            <span class="green_description"></span> Selected
        </span>
    </footer>
    <footer class="footer bg-light text-center m-b-50">
        <!-- Copyrights -->
        <div class="text-center py-4">
            <div class="container text-center">
                <p class="text-muted mb-0 py-2"> MoviesYet © 2021 All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        
        var all_seat_no = "";
        var all_seat_id = "";
        for(i=1; i<=260; i++)
        {
            function seat(i)
            {
                if(document.getElementById(i).style.backgroundColor=='')
                {
                    document.getElementById(i).style.backgroundColor='green';
                    document.getElementById(i).style.color='white';

                    var seat_no = document.getElementById(i).innerHTML;
                    var seat_id = document.getElementById(i).id;

                    if(seat_id>=0 && seat_id<=20){var row = 'A';}
                    if(seat_id>=21 && seat_id<=40){var row = 'B';}
                    if(seat_id>=41 && seat_id<=60){var row = 'C';}
                    if(seat_id>=61 && seat_id<=80){var row = 'D';}
                    if(seat_id>=81 && seat_id<=100){var row = 'E';}
                    if(seat_id>=101 && seat_id<=120){var row = 'F';}
                    if(seat_id>=121 && seat_id<=140){var row = 'G';}
                    if(seat_id>=141 && seat_id<=160){var row = 'H';}
                    if(seat_id>=161 && seat_id<=180){var row = 'I';}
                    if(seat_id>=181 && seat_id<=200){var row = 'J';}
                    if(seat_id>=201 && seat_id<=220){var row = 'K';}
                    if(seat_id>=221 && seat_id<=240){var row = 'L';}
                    if(seat_id>=241 && seat_id<=260){var row = 'M';}
                    
                    final_seat_no = row+seat_no;

                    all_seat_no = all_seat_no+final_seat_no+ ',';

                    document.getElementById('modal-title').innerHTML = all_seat_no;
                    // alert(final_seat);

                    all_seat_id = all_seat_id + document.getElementById(i).id + ',';
                    // alert(data_seat_no);
                    document.getElementById('data_seat_id').value = all_seat_id; 
                    document.getElementById('data_seat_no').value = all_seat_no;
                }
                else if(document.getElementById(i).style.backgroundColor=='gray')
                {
                     
                }
                else if(document.getElementById(i).style.backgroundColor=='#F1948A')
                {
                     
                }
                else
                {
                    document.getElementById(i).style.backgroundColor='';
                    document.getElementById(i).style.color='black';

                    var seat_no = document.getElementById(i).innerHTML;
                    var seat_id = document.getElementById(i).id;

                    if(seat_id>=0 && seat_id<=20){var row = 'A';}
                    if(seat_id>=21 && seat_id<=40){var row = 'B';}
                    if(seat_id>=41 && seat_id<=60){var row = 'C';}
                    if(seat_id>=61 && seat_id<=80){var row = 'D';}
                    if(seat_id>=81 && seat_id<=100){var row = 'E';}
                    if(seat_id>=101 && seat_id<=120){var row = 'F';}
                    if(seat_id>=121 && seat_id<=140){var row = 'G';}
                    if(seat_id>=141 && seat_id<=160){var row = 'H';}
                    if(seat_id>=161 && seat_id<=180){var row = 'I';}
                    if(seat_id>=181 && seat_id<=200){var row = 'J';}
                    if(seat_id>=201 && seat_id<=220){var row = 'K';}
                    if(seat_id>=221 && seat_id<=240){var row = 'L';}
                    if(seat_id>=241 && seat_id<=260){var row = 'M';}
                    
                    final_seat_no = row+seat_no;

                    all_seat_no = all_seat_no.replace(final_seat_no+',','');
                    all_seat_id = all_seat_id.replace(seat_id+',','');

                    document.getElementById('modal-title').innerHTML = all_seat_no;
                    document.getElementById('data_seat_id').value = all_seat_id;
                    document.getElementById('data_seat_no').value = all_seat_no;
                }
            }
        }

        @foreach($arr as $seat)
        for(i=1; i<=260; i++)
        {
            document.getElementById({{$seat->seat_id}}).style.backgroundColor='gray';
            document.getElementById({{$seat->seat_id}}).style.border='1px solid gray';
            document.getElementById({{$seat->seat_id}}).style.color='#212F3D';
        }
        @endforeach


    </script>
</body>

</html>