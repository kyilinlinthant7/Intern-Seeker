<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Apply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class Apply_Controller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $apply = Apply::all();
        //  $posts = Post::all();
        // $apply = DB::table('applies')->where($apply->post->user->id, Auth::id())->get();


        // $apply = DB::table('applies')
        //    ->whereExists(function ($query) {
        //        $query->select(DB::raw(1))
        //              ->from('posts')
        //              ->whereRaw('posts.user_id = Auth::id()');
        //    })
        //    ->get();

        return view('Frontend.applicant_list',compact('apply'));
        
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
        // dd($request);

        // Validation
        $request->validate([
            "title" => 'required',
            "company" => 'required',
            "subject" => 'required',
            "description" => 'required',
            "cv_form" => 'required',
            "post_id" => 'required'
        ]);

        //file upload
        if($request->hasfile("cv_form")){

            $cv_form = $request->file('cv_form');
            $upload_dir = public_path().'/storage/cv/';
            $name = time().'.'.$cv_form->getClientOriginalExtension();
            $cv_form -> move($upload_dir, $name);
            $path = '/storage/image/'.$name;

        }
        else{
             $path = '';
        }

        $apply = new Apply;

        $apply->user_id = Auth::id();
        $apply->post_id = request('post_id');
        $apply->subject = request('subject');
        $apply->description = request('description');
        $apply->cv_form = $path;

        $apply->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);

        return view('Frontend.apply',compact('posts'));
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
