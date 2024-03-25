<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $course=Course::latest()->get();
        return view('admin.course.index',compact('course'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $validdata=$request->validate([
        'short_title'=> 'required' ,
        'short_description'=> 'required' ,
        'small_img'=> 'required' ,
         'long_title'=> 'required' ,
          'long_description'=> 'required' , 
          'total_duration'=> 'required' ,
           'total_lecture'=> 'required' , 
           'total_student'=> 'required' ,
            'skill_all'=> 'required' ,
              'video_url'=> 'required' 

        
       ]);
    
       $image=$request->file('small_img');
       $filename=hexdec(uniqid()).'.'.$image->getClientOriginalName();
       $image->move(public_path('upload/images/'),$filename);
       $url='http://127.0.0.1:8000/upload/images/'.$filename;
  $data['short_title'] = $request->short_title;
  $data['short_description'] = $request->short_description;
  $data['long_title'] = $request->long_title;
  $data['long_description'] = $request->long_description;
  $data['total_duration'] = $request->total_duration;
  $data['total_lecture'] = $request->total_lecture;
  $data['total_student'] = $request->total_student;
   $data['skill_all'] = $request->total_student;
    $data['video_url'] = $request->total_student;

  $data['small_img'] = $url;
     
       Course::create($data);

 

 	$notification = array(
    		'message' => 'course created Successfully',
    		'alert-type' => 'success'
    	);

 

 return redirect()->route('course.index')->with($notification);
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
        $course= Course::find($id);
        return view('admin.course.edit', compact('course'));
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
       if ($request->file('small_img')){    $image=$request->file('small_img');
    
       $filename=hexdec(uniqid()).'.'.$image->getClientOriginalName();
       $image->move(public_path('upload/images/'),$filename);
       $url='http://127.0.0.1:8000/upload/images'.$filename;
       $data['small_img'] = $url;
       }
 $data['short_title'] = $request->short_title;
  $data['short_description'] = $request->short_description;
  $data['long_title'] = $request->long_title;
  $data['long_description'] = $request->long_description;
  $data['total_duration'] = $request->total_duration;
  $data['total_lecture'] = $request->total_lecture;
  $data['total_student'] = $request->total_student;
   $data['skill_all'] = $request->total_student;
    $data['video_url'] = $request->total_student;
  
        $service= Course::find($id);
        $service->update($data);
         return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $course = Course::find($id);
    
        $course->delete();
        
         return redirect()->route('course.index');
    }
}
