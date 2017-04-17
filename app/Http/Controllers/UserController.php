<?php

namespace App\Http\Controllers;

use App\Hotels;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('search');
    }

    public function hotelDetails()
    {
        return view('hotelDetails');
    }

    public function searchResult(Request $request)
    {
        $location = $request->input('location');
        $class = $request->input('class');
        $checkin=Carbon::parse($request->input('checkin'))->toDateString();
        $checkout=Carbon::parse($request->input('checkout'))->toDateString();

        if ($class != 'null') {
            $result = Hotels::where('location', 'like', "%$location%")->where('class', 'like', "%$class%")->get();
        } else {
            $result = Hotels::where('location', 'like', "%$location%")->get();
        }
        $data = [
            'hotels' => $result,
            'checkin'=>$checkin,
            'checkout'=>$checkout
        ];
        return view('searchResult')->with($data);
    }

    public function loginInterface()
    {
        return view('loginInterface');
    }

    public function regInterface()
    {
        return view('regInterface');
    }

    public function reg(Request $request)
    {


        $u = new User();
        $u->name = $request->input('name');
        $u->email = $request->input('email');
        $u->password = bcrypt($request->input('password'));
        $u->user_type = $request->input('type');
        $u->status = 0;
        $u->save();
        if ($request->input('type') == 'Manager') {
            $h = new Hotels();
            $h->name = $request->input('hotel_name');
            $h->location = $request->input('location');
            $h->class = $request->input('class');
            $h->user_id = $u->id;
            $h->save();
        }
        return redirect()->route('login')->with('msgS', 'Registration Complete.');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()->user_type == 'Tourist') {
                return redirect()->back();
            } elseif (Auth::user()->user_type == 'Manager') {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->user_type == 'Emp') {
                return redirect()->route('dashboard');
            }

        } else {
            return redirect()->back()->with('msgE','Invalid username/password');
        }
    }

    public function dashboard()
    {
        if(Auth::user()->user_type=='Manager'){
            return redirect()->route('listEmp');
        }
        else if(Auth::user()->user_type=='Emp'){
            return redirect()->route('listRoom');
        }

        $data = [
            'add' => '',
            'list' => '',
            'listreq' => '',
            'users' => User::where('user_type', 'Emp')->where('added_by', Auth::user()->id)->get(),
            'authUser' => Auth::user()
        ];
        return view('dashboard')->with($data);
    }

    public function logout()
    {
        Auth::Logout();
        return redirect()->back();
    }

    public function addEmployeeInterface()
    {
        $data = [
            'add' => 'active',
            'list' => ' ',
            'authUser' => Auth::user()
        ];
        return view('addEmployee')->with($data);
    }

    public function addEmployee(Request $request)
    {
        $check = User::where('email', $request->input('email'))->first();
        if ($check) {
            return redirect()->back()->with('msgE', 'Email already exist. Please try again.');
        }

        $u = new User();
        $u->name = $request->input('name');
        $u->email = $request->input('email');
        $u->password = bcrypt($request->input('password'));
        $u->user_type = 'Emp';
        if ($request->input('status')) {
            $u->status = 1;
        } else {
            $u->status = 0;
        }
        $u->added_by = Auth::user()->id;
        $u->save();
        return redirect()->back()->with('msgS', 'Successful Added Employee.');
    }

    public function listEmployeeInterface()
    {
        $data = [
            'add' => ' ',
            'list' => 'active',
            'users' => User::where('user_type', 'Emp')->where('added_by', Auth::user()->id)->get(),
            'authUser' => Auth::user()
        ];
        return view('listEmp')->with($data);
    }
}
