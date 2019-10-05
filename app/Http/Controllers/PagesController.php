<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        $user_id = auth()->user();
        $user = User::find($user_id);
        if($user)
        {
             $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.indext');
        }else
        return view('pages.index');
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['E-lerning', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}
