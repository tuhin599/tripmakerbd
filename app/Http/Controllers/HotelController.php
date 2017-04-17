<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Picture;
use App\RoomDetails;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HotelController extends Controller
{
        public function addRoomInterface(){
            $data=[
                'add'=>'',
                'list'=>'',
                'listreq'=>'',
                'authUser'=>Auth::user()
            ];
            return view('emp.addRooms')->with($data);
        }
        public function addRoom(Request $request){

            $rd=new RoomDetails();
            $rd->hotel_id=Auth::user()->getHotel->id;
            $rd->price=$request->input('price');
            $rd->room_number=$request->input('roomnumber');
            if($request->input('status')){
                $rd->status=1;
            }else{
                $rd->status=0;
            }
            $rd->save();
            if($request->hasFile('file')){
                $file = Input::file('file');
                // SET UPLOAD PATH
                $destinationPath = 'uploads';
                // GET THE FILE EXTENSION
                $extension = $file->getClientOriginalExtension();
                // RENAME THE UPLOAD WITH RANDOM NUMBER
                $fileName = rand(11111, 99999) . '.' . $extension;
                // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
                $upload_success = $file->move($destinationPath, $fileName);
                if ($upload_success) {
                    $p=new Picture();
                    $p->pic_type='room';
                    $p->pic_loc=$destinationPath.'/'.$fileName;
                    $p->ref_id=$rd->id;
                    $p->save();
                }
            }



            return redirect()->back()->with('msgS','Successfully Added the Room');

        }
        public function listRoom(){
            $data=[
                'add'=>'',
                'list'=>'active',
                'listreq'=>'',
                'rooms'=>RoomDetails::where('hotel_id',Auth::user()->getHotel->id)->get(),
                'authUser'=>Auth::user()
            ];
            return view('emp.listRooms')->with($data);
        }
        public function roomRequest(){
            $data=[
                'add'=>'',
                'list'=>'',
                'listreq'=>'active',
                'booking'=>Booking::all(),
                'authUser'=>Auth::user()
            ];
            return view('emp.roomRequest')->with($data);
        }

        public function bookrooms(){
            $rm=RoomDetails::find(Input::get('room'));
            if(!$rm){
                return redirect()->back()->with('msgE','Room number does not exist');
            }
            $b=new Booking();
            $b->book_by=Auth::user()->id;
            $b->book_room=$rm->id;
            $b->check_in=Input::get('checkin');
            $b->check_out=Input::get('checkout');
            $b->save();
            return redirect()->route('success.msg')->with('msgS','Your booking has been completed');


        }

        public function successMsg(){
            return view('emp.bookSuccess');
        }
}
