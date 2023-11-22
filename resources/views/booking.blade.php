<!DOCTYPE html>
<html>

<head>
    <title>Book Tickets</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/compact_util.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/material-icon-outlined.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Two+Tone" rel="stylesheet">
    <link href="css/booking.css" rel="stylesheet">
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
                <img src="images/favicon.png" class="width-50 "> MoviesYet
            </a>
            <div id="dateTime" class="text-light m-r-9" style="right: 0%;position: absolute;">
                <div class="datetime">
                    <div class="date">
                        <span id="daynum"> </span>
                        <span id="month"> </span>
                        <span id="year"> </span>
                    </div>
                    <div class="time">
                        <span id="hour"> </span>:
                        <span id="minutes"> </span>:
                        <span id="seconds"> </span>
                        <span id="period"> </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--Header End-->
    <!--Gap-->
    <div class="p-b-100"></div>
    <!--Gap end-->
    <!--Main Content Start-->
    <style>
    </style>
    <script>
        document.onkeydown = function (e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'P'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
    <style>
        #heading-h2 {
            width: 450px;
            margin: auto;
            text-align: center;
            font-size:30px;
        }
        #heading:after{
            
        }
    </style>
    
    <div class="container text-dark ">
        <h3 id="h3">
            <table>
                <tr>
                    <td style="border-bottom: 1px solid black;">
                        ARRS Multiplex Theatre, Salem
                    </td>
                </tr>
            </table>

        </h3>

        <table class="f-s-15">
            <tr>
                <td><img src="images/svg/icons8_theatre_curtain.svg" class="m-w-40"> Screen no</td>
                <td> : 1</td>
            </tr>
            <tr>
                <td><img src="images/svg/dvd_logo.svg" class="m-w-40"> Movie</td>
                <td> : Godzilla Vs Kong</td>
            </tr>
            <tr>
                <td><img src="images/svg/icons8_two_tickets.svg" class="m-w-40">Available Tickets</td>
                <td id="ticket_available_status"> : 0</td>
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
            <img class="m-w-35 " style="vertical-align:bottom;" src="images/svg/icons8_shopping_cart_1.svg">
            Checkout
        </button>
        
        
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
                        Selected Seats
                    </div>
                    <div class="modal-body" id="res">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Proceed</button>
                    </div>
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
            <img src="images/seat/seat.svg" class="m-w-30"> Available
        </span>
        <span class="border-1">
            <img src="images/seat/seat_red.svg" class="m-w-30 m-l-10">Booked
        </span>
        <span class="border-1">
            <img src="images/seat/seat_cross.svg" class="m-w-30 m-l-10">
            Not Available
        </span>
        <span class="border-1">
            <img src="images/seat/seat.svg" style="background-color: rgb(93, 150, 7);border-radius: 3px;"
                class="m-l-10 m-w-30">Selected
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
</body>

<script src="js/booking.js"></script>

</html>