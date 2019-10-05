<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Education;

class PagesUserController extends Controller
{
     public function myprofile()
    {
    	$user_id=auth()->user()->id;
    	$user= User::find($user_id);
        $skills=Skill::aLL();
         $educations=Education::aLL();
         $use=User::all();
    	return view('pagesuser.myprofile')->with('user',$user)->with('skills',$skills)->with('educations',$educations)->with('use',$use);
    }
     public function profile($id)
    {
        $user= User::find($id);

        return view('pagesuser.profile')->with('user',$user)->with('info',$user->info);
    }
    
     public function live()
    {
    	
    	return view('live.index');
    }
}
