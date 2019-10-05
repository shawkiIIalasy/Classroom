<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Markes;
use App\User;
use DB;
class MarkesController extends Controller
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
        $markes = Markes::all();
       
        return view('markes.index')->with('markes', $markes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
          return view('markes.create')->with('users',$users);
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
            'name' => 'required|exists:users',
            'first'=>'required|numeric|min:0|max:20',
            'second'=>'required|numeric|min:0|max:20',
            'third'=>'required|numeric|min:0|max:20',
            'final'=>'required|numeric|min:0|max:40'
            
        ]);

 
    
        $markes = new Markes;
        $markes->name = $request->input('name');
        $markes->first = $request->input('first');
  $markes->second = $request->input('second');
  $markes->third = $request->input('third');
       $markes->final = $request->input('final');
        $markes->user_id = auth()->user()->id;
        $markes->save();

        return redirect('/markes')->with('success', 'Marks Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $markes = Markes::find($id);
        return view('markes.show')->with('markes', $markes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $markes= Markes::find($id);
         if(auth()->user()->id !==$markes->user_id){
            return redirect('/markes')->with('error', 'Unauthorized Page');
        }
         return view('markes.edit')->with('markes', $markes);
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
            'name' => 'required',
            'first'=>'required|max:20|min:0',
            'second'=>'required|max:20|min:0',
            'third'=>'required|max:20|min:0',
            'final'=>'required|max:40|min:0'
            
        ]);

 
    
        $markes =   Markes::find($id);
        $markes->name = $request->input('name');
        $markes->first = $request->input('first');
  $markes->second = $request->input('second');
  $markes->third = $request->input('third');

       $markes->final = $request->input('final');
        $markes->user_id = auth()->user()->id;
        $markes->save();

        return redirect('/markes')->with('success', 'Marks Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $markes = Markes::find($id);

        if(auth()->user()->id !==$markes->user_id){
            return redirect('/markes')->with('error', 'Unauthorized Page');
        }
      
    
        
        $markes->delete();
        return redirect('/markes')->with('success', 'Marke Removed');
    }
}
