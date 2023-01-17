<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\photo;
use Alert;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_photo(Request $request)
    {
        $data=new photo;
		$data->photo_name=$request->photo_name;
				
		// img upload
		$photo=$request->file('photo');		
		$photoname=time().'_img.'.$request->file('photo')->getClientOriginalExtension();
		$photo->move('backend/assets/img/upload/',$photoname);  // use move for move image in public/images
		$data->photo=$photoname; // name store in db

        $multi_photoarr = [];
        if($request->hasfile('multi_photo'))
         {
            foreach($request->file('multi_photo') as $multi_photo)
            {
                $name = time().rand(1000,9999).'_img.'.$multi_photo->extension();
                $multi_photo->move('backend/assets/img/upload/multi/',$name);  
                $multi_photoarr[] = $name;  
            }
	        $data->multi_photo=implode(',',$multi_photoarr);
         }

		$data->save();
		Alert::success('success', 'Add Successful');
		return back();
        
    }


    function manage_photo()
	{
		$photo=photo::all();
        return view('backend.manage_photo',['fetch'=>$photo]);
	}

    public function viewall()
    {        
	   $photo=photo::all();	  // select * from
       return view('frontend.index',['data'=>$photo]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
