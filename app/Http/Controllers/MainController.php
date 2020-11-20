<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Events\TestEvent;
use Illuminate\Support\Str;
use DB;

class MainController extends Controller
{
    public function __invoke(Request $request)
    {
        return [1,2,3];
    }

    public function index()
    {
        // if(Auth::check()) {
        //     return response('Hello World', 200)
        //           ->header('Content-Type', 'text/plain');
        // }
        // else {
        //     return 'User not logged in';
        // }

        // $collection = collect(str_split('AABBCCCD'));

        // return $collection;

        // $user = User::findOrFail(1);


        // event(new TestEvent($user));

        //return User::groupBy('name')->get(); //Associtated array
        
        // $user = User::join('posts', function($join) {
        //             $join->on('users.id','=','posts.user_id')
        //             ->where('users.id', '>', 5);
        //         })->get();
        return response()->json('irfan', 200);


    }


}
