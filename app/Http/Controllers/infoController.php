<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\file;

use Illuminate\Http\Response;

use App\info;
use db;
use Auth;
use App\User;

class infoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
   
    public function index()
    {
       $info=info::all();
       $user_id=auth()->user()->id;
        $user= User::find($user_id);
        foreach ($info as $in) {
           if($user_id == $in->user_id)
           {
            return view('pagesuser.myprofile')->with('info',$info)->with('user',$user);
           }
        }
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info=info::all();
          return view('info.create')->with('info',$info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
          $this->validate($request, [
            'Phone_Number' => 'required',
            'Home_Address'=>'required',
            'DateofBirth'=>'required',
            'Gender'=>'required',
            
        ]);
            if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('/public/cover_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        $info = new info;
        $info->Phone_Number = $request->input('Phone_Number');
        $info->Home_Address = $request->input('Home_Address');
        $info->Gender = $request->input('Gender');
        $info->DateofBirth = $request->input('DateofBirth');
        $info->image = $fileNameToStore;
        $info->user_id = auth()->user()->id;
        $info->save();

        return redirect('/info')->with('success', 'information Update');

         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = info::find($id);
        return view('info.show')->with('info', $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $info= info::find($id);
        $user_id=auth()->user()->id;
        $user= User::find($user_id);
         if(auth()->user()->id !==$info->user_id){
            return redirect('/info')->with('error', 'Unauthorized Page');
        }

         return view('info.edit')->with('user',$user)->with('info', $info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'Phone_Number' => 'required',
            'Home_Address'=>'required',
            'DateofBirth'=>'required',
            'Gender'=>'required',
    
            
        ]);
         if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('/public/cover_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }


        $info = info::find($id);
        $info->Phone_Number = $request->input('Phone_Number');
        $info->Home_Address = $request->input('Home_Address');
        $info->Gender = $request->input('Gender');
        $info->DateofBirth = $request->input('DateofBirth');
        $info->image = $fileNameToStore;
        $info->user_id = auth()->user()->id;
        $info->save();

        return redirect('/info')->with('info',$info)->with('success', 'information Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
