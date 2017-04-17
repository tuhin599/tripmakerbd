<?php

namespace App\Http\Controllers;

use App\Experience;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function history()
    {
        $history=DB::table('historical_places')->get();

        return view('travel.history')->with('histories',$history);
    }

    public function experience()
    {
        $data = [
            'authUser' =>Auth::user(),
            'exp'=>Experience::all()
        ];
        return view('travel.experience')->with($data);

    }
    public function shareExperience(Request $request){
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $ex=new Experience();
        $ex->exp_by=Auth::user()->id;
        $ex->title=$request->input('title');
        $ex->des=$request->input('des');
        $ex->save();
        return redirect()->route('bookSuccess')->with('msgS','Thanks for sharing your experience with us.');

    }
}
