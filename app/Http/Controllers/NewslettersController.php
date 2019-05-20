<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Newsletters;

class NewslettersController extends Controller
{
    public function createNewsletter(Request $request){
        return ( $this->validEmail($request->input('email')) ) ?
            response()->json(Newsletters::create($request->all())) :
            response()->json(false);
    }

    public function validEmail($email){
        $new = Newsletters::whereEmail($email)->first();
        return is_null($new) ? true : false;
    }

    public function getAllNewsletter(){
        return response()->json(Newsletters::all());
    }

    public function getSpecificNewsletter(Request $request){
        $new = Newsletters::whereEmail($request->input('email'))
            ->orWhere('id',$request->input('id'))
            ->first();
        return is_null($new) ? response()->json(false) : response()->json($new);
    }
}
