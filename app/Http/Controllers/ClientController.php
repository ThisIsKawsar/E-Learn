<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $client=Client::latest()->get();
        return view('admin.client.index',compact('client'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $validdata=$request->validate([
        'client_img'=> 'required' ,
        'client_title'=> 'required' ,
        'client_description'=> 'required' 

       ]);
       $image=$request->file('client_img');
       $filename=hexdec(uniqid()).'.'.$image->getClientOriginalName();
       $image->move(public_path('upload/images/'),$filename);
       $url='upload/images/'.$filename;
               
 $data['client_title'] = $request->client_title;
  $data['client_description'] = $request->client_description;
  $data['client_img'] = $url;
        Client::create($data);

 return redirect()->route('client.index');
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
        $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
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
        if ($request->file('client_img')){  
                    $image=$request->file('client_img');
       $filename=hexdec(uniqid()).'.'.$image->getClientOriginalName();
       $image->move(public_path('upload/images/'),$filename);
       $url='upload/images/'.$filename;
       $data['client_img'] = $url;}
               
 $data['client_title'] = $request->client_title;
  $data['client_description'] = $request->client_description;
  
        $info =Client::find($id);
        $info->update($data);
         return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $info =Client::find($id);
        $info->delete();
         return redirect()->route('client.index');
    }
}
