<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $educations= Education::all();
        return view('info.education')->with('educations',$educations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'school' => 'required',
            'degree' => 'required',
            'grade' => 'required',
            'Activitiesandsocieties' => '',
            'Fieldofstudy' => 'required',
            'FromYear' => 'required|date',
            'ToYear' => 'required|date',
            'Description' => '',
            'Media' => 'mimes:doc,pdf,PDF,docx,zip'
        ]);

        // Handle File Upload
        if($request->hasFile('Media')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Media')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Media')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Media')->storeAs('/public/Media', $fileNameToStore);
        } else {
            $fileNameToStore = 'none';
        }

        // Create Post
        $educations = new Education;
        $educations->school = $request->input('school');
        $educations->degree = $request->input('degree');
        $educations->Activitiesandsocieties = $request->input('Activitiesandsocieties');
        $educations->Fieldofstudy = $request->input('Fieldofstudy');
        $educations->FromYear = $request->input('FromYear');
        $educations->ToYear = $request->input('ToYear');
        $educations->Description = $request->input('Description');
        $educations->grade = $request->input('grade');
        $educations->user_id = auth()->user()->id;
        $educations->Media = $fileNameToStore;
        $educations->save();

        return redirect('/education')->with('success', 'Education Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'school' => 'required',
            'degree' => 'required',
            'grade' => 'required',
            'Activitiesandsocieties' => '',
            'Fieldofstudy' => 'required',
            'FromYear' => 'required|date',
            'ToYear' => 'required|date',
            'Description' => '',
            'Media' => 'mimes:doc,pdf,PDF,docx,zip'
        ]);

        // Handle File Upload
        if($request->hasFile('Media')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Media')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Media')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Media')->storeAs('/public/Media', $fileNameToStore);
        } else {
            $fileNameToStore = 'none';
        }

        // Create Post
        $educations = Education::find($id);
        $educations->school = $request->input('school');
        $educations->degree = $request->input('degree');
        $educations->Activitiesandsocieties = $request->input('Activitiesandsocieties');
        $educations->Fieldofstudy = $request->input('Fieldofstudy');
        $educations->FromYear = $request->input('FromYear');
        $educations->ToYear = $request->input('ToYear');
        $educations->Description = $request->input('Description');
        $educations->grade = $request->input('grade');
        $educations->user_id = auth()->user()->id;
        $educations->Media = $fileNameToStore;
        $educations->save();

        return redirect('/education')->with('success', 'Education Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educations = Education::find($id);

        // Check for correct user
        if(auth()->user()->id !==$educations->user_id){
            return redirect('/education')->with('error', 'Unauthorized Page');
        }

        if($educations->Media != 'none'){
            // Delete Image
            Storage::delete('/public/Media/'.$educations->Media);
        }
        
        $educations->delete();
        return redirect('/education')->with('success', 'Post Removed');
    }
    
}
