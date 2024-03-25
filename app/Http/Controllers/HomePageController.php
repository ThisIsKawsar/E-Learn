<?php

namespace App\Http\Controllers;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $home=HomePage::latest()->get();
        return view('admin.homepage.index',compact('home'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $validdata=$request->validate([
        'home_title'=> 'required' ,
         'home_subtitle'=> 'required' ,
          'tech_description'=> 'required' ,
           'total_student'=> 'required' ,
            'total_course'=> 'required' , 
            'total_review'=> 'required' ,
             'video_description'=> 'required' ,
               'video_url'=> 'required' 
        
       ]);
          $data = $request->all();
          HomePage::create($data);

 return redirect()->route('homepage.index');
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
        $home= HomePage::find($id);
        return view('admin.homepage.edit', compact('home'));
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
             $data = $request->all();
        $info = HomePage::find($id);
        $info->update($data);
         return redirect()->route('homepage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $info = HomePage::find($id);
        $info->delete();
         return redirect()->route('homepage.index');
    }
}
