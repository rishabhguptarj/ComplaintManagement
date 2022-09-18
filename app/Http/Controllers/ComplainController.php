<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Complain;
use App\Models\User;
use Validator;

class ComplainController extends Controller
{
    public function addComplain(Request $request)
    {
        if(Auth::check()) {
            
            $user = User::where('id',Auth::id())->first();
            // dd($user->id);
            $user_id = $user->id;
        }else{
            $user_id = null;
        }

        $complain = Complain::create([
            'user_id' => $user_id,
            'complain' => $request->complain,
            'type' => $request->type,
            'complain_name' => $request->complain_name,
        ]);
        if($complain){
            return response()->json([
                'message' => 'Complain successfully registered',
                'user' => $complain
            ], 200);
        }else{
            return response()->json([
                'message' => 'Your complain does not registered',
            ], 400);
        }
    }

    public function getcomplain()
    {
        $getcomplain = Complain::get();
        if($getcomplain){
            return response()->json([
                'message' => 'Complain Details',
                'user' => $getcomplain
            ], 200);
        }else{
            return response()->json([
                'message' => 'Record Not Found',
            ], 400);
        }
    }
}
