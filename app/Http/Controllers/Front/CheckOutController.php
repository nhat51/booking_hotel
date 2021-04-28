<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use App\Models\Travelers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class CheckOutController extends Controller
{
    //
    public function index(){
        return view('checkout');
    }

    public function addBooking(Request $request){
        $traveler = new Travelers();

        if ($traveler->user_id == null){  $traveler -> salutation = $request->salutation;
            $traveler -> gender = $request->gender;
            $traveler -> first_name = $request->first_name;
            $traveler -> last_name = $request->last_name;
            $traveler -> date_of_birth = $request->date_of_birth;
            $traveler -> email = $request->email;
            $traveler -> phone = $request->phone;
            $traveler -> country = $request->country;
        }
        elseif ($traveler->user_id != null) {
            $traveler->user_id = $request->user_id;
            $traveler->salutation = $request->salutation;
            $traveler->gender = $request->gender;
            $traveler->first_name = $request->first_name;
            $traveler->last_name = $request->last_name;
            $traveler->date_of_birth = $request->date_of_birth;
            $traveler->email = $request->email;
            $traveler->phone = $request->phone;
            $traveler->country = $request->country;
        }
        $traveler->save();

        return 'success';
    }

}
