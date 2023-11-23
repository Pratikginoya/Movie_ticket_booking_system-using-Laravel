<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seat_book;
use App\Models\user_register;
use App\Models\booked;

use App\Models\cinema_register;
use App\Models\movie_show;

use App\Models\admin_login;
use App\Models\slider;
use App\Models\movie;


use DateTime;

class moviecontroller extends Controller
{
    // Front-end
    public function index(Request $req)
    {
        $slider = slider::all();
        $movie = movie::where('status','=','Live')->get();

        return view('index',['arr'=>$slider,'arr2'=>$movie]);
    }

    public function user_login(Request $req)
    {
        if($req->session()->has('user_login'))
        {
            return redirect('/');
        }

        if($req->login)
        {
            $email = $req->email;
            $password = $req->password;

            if(preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password) && preg_match("/\W/",$password) && !preg_match("/\s/",$password))
            {
                $check = user_register::where('email',$email)->where('password',$password)->count();
                if($check>0)
                {
                    $arr = user_register::where('email',$email)->where('password',$password)->first();
                    session(['user_login'=>$arr['user_id']]);
                    session(['user_name'=>$arr['name']]);

                    if(session()->has('show_id') && session()->has('screen_no') && session()->has('seat_id') && session()->has('seat_no'))
                    {
                        return redirect('/pay_now');
                    }
                    else
                    {
                        return redirect('/');
                    }
                    
                }
                else
                {
                    return redirect('/login')->with('message', 'Entered Email and Password is not match...!');
                }
            }
            else
            {
                return redirect('/login')->with('message', 'Entered Email and Password is not match...!');
            }
            
        }
        return view('login');
    }

    public function user_register(Request $req)
    {
        if($req->register)
        {
            $req->validate([
                'email' => 'unique:user_register,email',
                'mobile' => 'unique:user_register,mobile',
            ]);

            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $password2 = $req->password2;
            $mobile = $req->mobile;

            if($password==$password2)
            {
                if(preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password) && preg_match("/\W/",$password) && !preg_match("/\s/",$password))
                {
                     $sql_update = array('name'=>$name,'email'=>$email,'password'=>$password,'mobile'=>$mobile);
                    user_register::create($sql_update);

                    return redirect('/login');
                }
                else
                {
                    return redirect('/register')->with('message', 'Kindly use Capital and Small letter, use Numbers, use Special-Symbols in password & Do not user space in password...');
                }
            }
            else
            {
                return redirect('/register')->with('message', 'Re-enter password is not match..!  Kindly enter same password in both field..'); 
            }
        }
        return view('register');
    }

    public function show_time(Request $req,$id)
    {
        $movie_detail = movie::where('movie_id',$id)->get();

        date_default_timezone_set('Asia/Kolkata');
        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $cinema1 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today1)->get();
        $cinema2 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today2)->get();
        $cinema3 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today3)->get();
        $cinema4 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today4)->get();
        $cinema5 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today5)->get();
        $cinema6 = movie_show::select('user_id')->distinct()->where('m_id',$id)->where('date',$today6)->get();

        return view('/show-time',['arr'=>$movie_detail,'cinema1'=>$cinema1,'cinema2'=>$cinema2,'cinema3'=>$cinema3,'cinema4'=>$cinema4,'cinema5'=>$cinema5,'cinema6'=>$cinema6,'id'=>$id,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }


    public function INOX_Vesu_screen_1(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_1',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function INOX_Vesu_screen_2(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_2',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function INOX_Vesu_screen_3(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_3',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function INOX_Vesu_screen_4(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_4',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function INOX_Vesu_screen_5(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_5',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function INOX_Vesu_screen_6(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();

        return view('/INOX_Vesu_screen_6',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function Rajhans_Cinema_Vesu_screen_1(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/Rajhans Cinema_Vesu_screen_1',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function Rajhans_Cinema_Vesu_screen_2(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/Rajhans Cinema_Vesu_screen_2',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function Rajhans_Cinema_Vesu_screen_3(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/Rajhans Cinema_Vesu_screen_3',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function Rajhans_Cinema_Vesu_screen_4(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/Rajhans Cinema_Vesu_screen_4',['arr'=>$arr,'arr2'=>$arr2]);
    }


    public function PVR_Piplod_screen_1(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/PVR_Piplod_screen_1',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function PVR_Piplod_screen_2(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/PVR_Piplod_screen_2',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function PVR_Piplod_screen_3(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/PVR_Piplod_screen_3',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function PVR_Piplod_screen_4(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');
        seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();

        $arr = seat_book::where('show_id',$id)->get();
        $arr2 = movie_show::where('show_id',$id)->get();
        
        return view('/PVR_Piplod_screen_4',['arr'=>$arr,'arr2'=>$arr2]);
    }

    public function book_ticket(Request $req)
    {
        $user_id = $req->session()->get('user_login');
        booked::where('user_id',$user_id)->where('status','=','pending')->delete();

        if($req->session()->has('user_login'))
        {
            if($req->book_seat)
            {
                $user_id = $req->session()->get('user_login');
                $show_id = $req->show_id;
                $screen_no = $req->screen_no;
                $gold = $req->gold;
                $silver = $req->silver;
                $platinum = $req->platinum;
                $seat_no_e = $req->seat_no;
                $seat_id = explode(',',$req->seat_id);
                $seat_no = explode(',',$req->seat_no);

                $total_seat = count($seat_id)-1;
                $total_pay = 0;

                for($i=0; $i<$total_seat; $i++)
                {
                    if($seat_id[$i]>=0 && $seat_id[$i]<=40){$price = $gold;}
                    if($seat_id[$i]>=41 && $seat_id[$i]<=120){$price = $silver;}
                    if($seat_id[$i]>=121 && $seat_id[$i]<=260){$price = $platinum;}

                    $total_pay = $total_pay + $price;

                    $insert = array('user_id'=>$user_id,'show_id'=>$show_id,'screen_no'=>$screen_no,'seat_id'=>$seat_id[$i],'seat_no'=>$seat_no[$i],'price'=>$price);
                    seat_book::create($insert);
                }

                $insert_booked = array('user_id'=>$user_id,'show_id'=>$show_id,'all_seat_no'=>$seat_no_e,'total_seats'=>$total_seat,'total_pay'=>$total_pay);
                booked::create($insert_booked);

                return redirect('/pay_now');
            }            
        }
        else
        {
            if($req->book_seat)
            {
                $user_id = $req->session()->get('user_login');
                session(['show_id'=>$req->show_id]);
                session(['screen_no'=>$req->screen_no]);
                session(['gold'=>$req->gold]);
                session(['silver'=>$req->silver]);
                session(['platinum'=>$req->platinum]);
                session(['seat_id'=>$req->seat_id]);
                session(['seat_no'=>$req->seat_no]);

                return redirect('/login');
            }
        }
    }

    public function pay_now(Request $req)
    {
        if(session()->has('show_id') && session()->has('screen_no') && session()->has('seat_id') && session()->has('seat_no'))
        {
            $user_id = $req->session()->get('user_login');
            booked::where('user_id',$user_id)->where('status','=','pending')->delete();
            seat_book::where('user_id',$user_id)->where('status','=','pending')->delete();
            
            $user_id = $req->session()->get('user_login');
            $show_id = $req->session()->get('show_id');
            $screen_no = $req->session()->get('screen_no');
            $seat_id_e = $req->session()->get('seat_id');
            $seat_no_e = $req->session()->get('seat_no');
            $gold = $req->session()->get('gold');
            $silver = $req->session()->get('silver');
            $platinum = $req->session()->get('platinum');

            $seat_id = explode(',',$seat_id_e);
            $seat_no = explode(',',$seat_no_e);

            $total_seat = count($seat_id)-1;
            $total_pay = 0;

            for($i=0; $i<$total_seat; $i++)
            {
                if($seat_id[$i]>=0 && $seat_id[$i]<=40){$price = $gold;}
                if($seat_id[$i]>=41 && $seat_id[$i]<=120){$price = $silver;}
                if($seat_id[$i]>=121 && $seat_id[$i]<=260){$price = $platinum;}

                $total_pay = $total_pay + $price;

                $insert = array('user_id'=>$user_id,'show_id'=>$show_id,'screen_no'=>$screen_no,'seat_id'=>$seat_id[$i],'seat_no'=>$seat_no[$i],'price'=>$price);
                seat_book::create($insert);
            }

            $insert_booked = array('user_id'=>$user_id,'show_id'=>$show_id,'all_seat_no'=>$seat_no_e,'total_seats'=>$total_seat,'total_pay'=>$total_pay);
            booked::create($insert_booked);
        }
        
        $req->session()->forget('show_id');
        $req->session()->forget('screen_no');
        $req->session()->forget('seat_id');
        $req->session()->forget('seat_no');
        $req->session()->forget('gold');
        $req->session()->forget('silver');
        $req->session()->forget('platinum');

        $user_id = $req->session()->get('user_login');

        if($req->book_now)
        {
            $booked_id = $req->booked_id;
            $update = array('status'=>'booked');
            booked::where('booked_id',$booked_id)->update($update);

            $update_seat = array('status'=>'booked');
            seat_book::where('user_id',$user_id)->where('status','=','pending')->update($update_seat);

            return redirect('/ticket_detail/'.$booked_id);
        }

        $arr = booked::join('movie_show','movie_show.show_id','=','booked.show_id')->join('movie','movie.movie_id','=','movie_show.m_id')->where('booked.user_id',$user_id)->where('booked.status','=','pending')->get();
        return view('pay_now',['arr'=>$arr]);
    }

    public function ticket_detail(Request $req,$id)
    {
        $user_id = $req->session()->get('user_login');

        $arr = booked::join('movie_show','movie_show.show_id','=','booked.show_id')->join('movie','movie.movie_id','=','movie_show.m_id')->where('booked.booked_id',$id)->get();

        return view('ticket_detail',['arr'=>$arr]);
    }

    public function my_booking(Request $req)
    {
        $user_id = $req->session()->get('user_login');

        $arr = booked::join('movie_show','movie_show.show_id','=','booked.show_id')->join('movie','movie.movie_id','=','movie_show.m_id')->where('booked.user_id',$user_id)->orderBy('booked_id','desc')->get();

        return view('my_booking',['arr'=>$arr]);
    }

    
    public function logout(Request $req)
    {
        $req->session('admin_login')->flush();

        return redirect('/login');
    }


    // Back-end (Cinema Theater Admin)
    public function cinema_index(Request $req)
    {
        if($req->session()->has('cinema_login'))
        {
            return redirect('/cinema/dashboard');
        }

        if($req->signin)
        {
            $email = $req->email;
            $password = $req->password;

            if(preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password) && preg_match("/\W/",$password) && !preg_match("/\s/",$password))
            {
                $check = cinema_register::where('email',$email)->where('password',$password)->count();

                if($check>0)
                {
                    $arr = cinema_register::where('email',$email)->where('password',$password)->first();
                    session(['cinema_login'=>$arr['cinema_id']]);
                    session(['cinema_name'=>$arr['th_name']]);
                    session(['cinema_location'=>$arr['location']]);

                    return redirect('/cinema/dashboard');
                }
                else
                {
                    return redirect('/cinema/index')->with('message', 'Entered Emaile and Password is not match...!');
                }
            }
            else
            {
                return redirect('/cinema/index')->with('message', 'Entered Emaile and Password is not match...!');
            }
        }
        return view('cinema/index');
    }

    public function cinema_register(Request $req)
    {
        if($req->cinema_register)
        {
            $req->validate([
                'email' => 'unique:cinema_register,email',
                'mobile' => 'unique:cinema_register,mobile',
            ]);

            $owner = $req->owner;
            $th_name = $req->th_name;
            $shopping = $req->shopping;
            $location = $req->location;
            $license = $req->license;
            $total_screen = $req->total_screen;
            $email = $req->email;
            $password = $req->password;
            $password2 = $req->password2;
            $mobile = $req->mobile;

            if($password==$password2)
            {
                if(preg_match("/[A-Z]/",$password) && preg_match("/[a-z]/",$password) && preg_match("/[0-9]/",$password) && preg_match("/\W/",$password) && !preg_match("/\s/",$password))
                {
                     $sql_update = array('owner'=>$owner,'th_name'=>$th_name,'shopping'=>$shopping,'location'=>$location,'license'=>$license,'total_screen'=>$total_screen,'email'=>$email,'password'=>$password,'mobile'=>$mobile);
                    cinema_register::create($sql_update);

                    return redirect('/cinema/index');
                }
                else
                {
                    return redirect('/cinema-register')->with('message', 'Kindly use Capital and Small letter, use Numbers, use Special-Symbols in password & Do not user space in password...');
                }
            }
            else
            {
                return redirect('/cinema-register')->with('message', 'Re-enter password is not match..!  Kindly enter same password in both field..'); 
            }
        }

        return view('cinema-register');
    }

    public function cinema_dashboard(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');
        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $day1 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today1)->count();
        $day2 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today2)->count();
        $day3 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today3)->count();
        $day4 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today4)->count();
        $day5 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today5)->count();
        $day6 = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today6)->count();
        $booked = movie_show::join('booked','booked.show_id','=','movie_show.show_id')->join('movie','movie.movie_id','=','movie_show.m_id')->where('movie_show.user_id',$user_id)->where('booked.status','=','booked')->count();

        return view('/cinema/dashboard',['day1'=>$day1,'day2'=>$day2,'day3'=>$day3,'day4'=>$day4,'day5'=>$day5,'day6'=>$day6,'booked'=>$booked]);
    }

    public function add_movie_show(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $movie_live = movie::where('status','=','Live')->get();
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        if($req->add_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_insert = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::create($sql_insert);
            
            return redirect('/cinema/add-movie-show');
        }

        return view('/cinema/add-movie-show',['arr'=>$movie_live,'arr2'=>$screen]);
    }

    // Today
    public function view_movie_show_today(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today1)->get();

        return view('/cinema/view-movie-show-today',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_today(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-today');
    }

    public function edit_movie_show_today(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-today',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_today(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-today');
    }

    // Day2
    public function view_movie_show_2(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today2)->get();

        return view('/cinema/view-movie-show-2',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_2(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-2');
    }

    public function edit_movie_show_2(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-2',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_2(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-2');
    }

    // Day3
    public function view_movie_show_3(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today3)->get();

        return view('/cinema/view-movie-show-3',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_3(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-3');
    }

    public function edit_movie_show_3(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-3',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_3(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-3');
    }

    // Day4
    public function view_movie_show_4(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today4)->get();

        return view('/cinema/view-movie-show-4',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_4(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-4');
    }

    public function edit_movie_show_4(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-4',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_4(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-4');
    }

    // Day5
    public function view_movie_show_5(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today5)->get();

        return view('/cinema/view-movie-show-5',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_5(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-5');
    }

    public function edit_movie_show_5(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-5',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_5(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-5');
    }

    // Day6
    public function view_movie_show_6(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $today1 = date('d-M');
        $today2 = date('d-M',strtotime('+1 day'));
        $today3 = date('d-M',strtotime('+2 day'));
        $today4 = date('d-M',strtotime('+3 day'));
        $today5 = date('d-M',strtotime('+4 day'));
        $today6 = date('d-M',strtotime('+5 day'));

        $movie_show = movie_show::join('movie','movie.movie_id','=','movie_show.m_id')->where('user_id',$user_id)->where('date',$today6)->get();

        return view('/cinema/view-movie-show-6',['arr'=>$movie_show,'t1'=>$today1,'t2'=>$today2,'t3'=>$today3,'t4'=>$today4,'t5'=>$today5,'t6'=>$today6]);
    }

    public function delete_movie_show_6(Request $req,$id)
    {
        $arr = movie_show::where('show_id',$id)->delete();

        return redirect('/cinema/view-movie-show-6');
    }

    public function edit_movie_show_6(Request $req,$id)
    {   
        $movie_live = movie::where('status','=','Live')->get();
        $movie = movie_show::where('show_id',$id)->get();

        $user_id = $req->session()->get('cinema_login');
        $screen = cinema_register::select('total_screen')->where('cinema_id',$user_id)->get();

        return view('/cinema/edit-movie-show-6',['arr'=>$movie_live,'arr2'=>$movie,'arr3'=>$screen]);
    }

    public function submit_edit_movie_show_6(Request $req,$id)
    {
        $user_id = $req->session()->get('cinema_login');

        if($req->edit_show)
        {
            $movie_id = $req->movie;
            $show_time = implode(':',$req->show_time);
            $screen = $req->screen;
            $gold = $req->gold;
            $silver = $req->silver;
            $platinum = $req->platinum;
            $get_data = $req->date;
            date_default_timezone_set('Asia/Kolkata');

            if($get_data=="Today"){$date = date('d-M');}
            if($get_data=="Tommorow"){$date = date('d-M',strtotime('+1 day'));}
            if($get_data=="Day after Tommorow"){$date = date('d-M',strtotime('+2 day'));}
            if($get_data=="Day after Tommorow + 1"){$date = date('d-M',strtotime('+3 day'));}
            if($get_data=="Day after Tommorow + 2"){$date = date('d-M',strtotime('+4 day'));}
            if($get_data=="Day after Tommorow + 3"){$date = date('d-M',strtotime('+5 day'));}


            $sql_update = array('user_id'=>$user_id,'m_id'=>$movie_id,'show_time'=>$show_time,'screen'=>$screen,'date'=>$date,'gold'=>$gold,'silver'=>$silver,'platinum'=>$platinum);
            movie_show::where('show_id',$id)->update($sql_update);
        }

        return redirect('/cinema/view-movie-show-6');
    }

    public function bookings(Request $req)
    {
        $user_id = $req->session()->get('cinema_login');

        $arr = movie_show::join('booked','booked.show_id','=','movie_show.show_id')->join('movie','movie.movie_id','=','movie_show.m_id')->where('movie_show.user_id',$user_id)->where('booked.status','=','booked')->get();

        return view('cinema/bookings',['arr'=>$arr]);
    }


    public function cinema_logout(Request $req)
    {
        $req->session('cinema_login')->flush();

        return redirect('/cinema/index');
    }


    // Back-end (Website Admin)
    public function admin_index(Request $req)
    {
        if($req->session()->has('admin_login'))
        {
            return redirect('/admin/dashboard');
        }

        if($req->signin)
        {
            $email = $req->email;
            $password = $req->password;

            $check = admin_login::where('email',$email)->where('password',$password)->count();

            if($check>0)
            {
                $arr = admin_login::where('email',$email)->where('password',$password)->first();
                session(['admin_login'=>$arr['id']]);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect('/admin/index')->with('message', 'Entered Emaile and Password is not match...!');
            }
        }
        return view('admin/index');
    }

    public function dashboard(Request $req)
    {
        $slider = slider::count();
        $live = movie::where('status','=','Live')->count();
        $all = movie::count();
        $cinema = cinema_register::count();

        return view('/admin/dashboard',['slider'=>$slider,'live'=>$live,'all'=>$all,'cinema'=>$cinema]);
    }

    // Slider
    public function add_slider(Request $req)
    {
        if($req->submit_slider)
        {
            $title = $req->title;

            date_default_timezone_set('Asia/Kolkata');
            $image = date('dmY_His_').$req->file('image')->getClientOriginalName();
            $req->image->move(public_path('site_images'),$image);

            $sql_insert = array('title'=>$title,'image'=>$image);
            slider::create($sql_insert);
        }
        return view('admin/add-slider');
    }

    public function view_slider(Request $req)
    {
        $arr = slider::all();

        return view('admin/view-slider',['arr'=>$arr]);
    }

    public function delete_slider(Request $req,$id)
    {
        $image = slider::where('id',$id)->first()->image;

        unlink('site_images/'.$image);

        slider::where('id',$id)->delete();

        return redirect('/admin/view-slider');
    }

    public function edit_slider(Request $req,$id)
    {
        $arr = slider::where('id',$id)->get();

        return view('admin/edit-slider',['arr'=>$arr]);
    }

    public function submit_edit_slider(Request $req,$id)
    {
        if($req->edit_slider)
        {
            $title = $req->title;
            $image_chk = $req->file('image');

            if($image_chk==null)
            {
                $image = slider::where('id',$id)->first()->image;
            }
            else
            {
                $image_delete = slider::where('id',$id)->first()->image;
                unlink('site_images/'.$image_delete);

                date_default_timezone_set('Asia/Kolkata');
                $image = date('dmY_His_').$req->file('image')->getClientOriginalName();

                $req->image->move(public_path('site_images'),$image);
            }

            $sql_update = array('title'=>$title,'image'=>$image);
            slider::where('id',$id)->update($sql_update);

            return redirect('/admin/view-slider');
        }
    }


    // Movie
    public function add_movie(Request $req)
    {
        if($req->submit_movie)
        {
            $name = $req->name;
            $director = $req->director;
            $language = implode(', ',$req->language);
            $duration = implode(':',$req->duration);
            $release_date = implode('-',$req->release_date);
            $rating = $req->rating;

            date_default_timezone_set('Asia/Kolkata');
            $image = date('dmY_His_').$req->file('movie_image')->getClientOriginalName();
            $req->movie_image->move(public_path('site_images'),$image);

            $status = $req->status;

            $sql_insert = array('name'=>$name,'director'=>$director,'language'=>$language,'duration'=>$duration,'release_date'=>$release_date,'rating'=>$rating,'movie_image'=>$image,'status'=>$status);
            movie::create($sql_insert);
        }
        return view('admin/add-movie');
    }

    public function view_movie(Request $req)
    {
        $arr = movie::all();

        return view('admin/view-movie',['arr'=>$arr]);
    }

    public function delete_movie(Request $req,$id)
    {
        $image = movie::where('movie_id',$id)->first()->movie_image;

        unlink('site_images/'.$image);

        movie::where('movie_id',$id)->delete();

        return redirect('/admin/view-movie');
    }

    public function edit_movie(Request $req,$id)
    {
        $arr = movie::where('movie_id',$id)->get();

        return view('admin/edit-movie',['arr'=>$arr]);
    }

    public function submit_edit_movie(Request $req,$id)
    {
        if($req->edit_movie)
        {
            $name = $req->name;
            $director = $req->director;
            $language = implode(', ',$req->language);
            $duration = implode(':',$req->duration);
            $release_date = implode('-',$req->release_date);
            $rating = $req->rating;
            $image_chk = $req->file('movie_image');

            if($image_chk==null)
            {
                $image = movie::where('movie_id',$id)->first()->movie_image;
            }
            else
            {
                $image_delete = movie::where('movie_id',$id)->first()->movie_image;
                unlink('site_images/'.$image_delete);

                date_default_timezone_set('Asia/Kolkata');
                $image = date('dmY_His_').$req->file('movie_image')->getClientOriginalName();

                $req->movie_image->move(public_path('site_images'),$image);
            }

            $status = $req->status;

            $sql_update = array('name'=>$name,'language'=>$language,'rating'=>$rating,'movie_image'=>$image,'status'=>$status);
            movie::where('movie_id',$id)->update($sql_update);

            return redirect('/admin/view-movie');
        }
    }

    public function view_cinema(Request $req)
    {
        $arr = cinema_register::all();

        return view('admin/view-cinema',['arr'=>$arr]);
    }



    public function admin_logout(Request $req)
    {
        $req->session('admin_login')->flush();

        return redirect('/admin/index');
    }
}
