<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Company_Type;
use App\Company;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;

class Post_Controller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('Frontend.notice_board',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Company_Type::all();
        return view('Frontend.post',compact('types'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        // Validation
        $request->validate([
            "title" => 'required',
            "no_of_position" => 'required' ,
            "intern_field" => 'required',
            "skill_required" => 'required',
            "deadline" => 'required',
            "duration" => 'required',
            "detail" => 'required',
        ]);

        $post = new Post;

        $post->title = request('title');
        $post->no_of_position = request('no_of_position');
        $post->intern_field = request('intern_field');
        $post->skill_required = request('skill_required');
        $post->deadline = request('deadline');
        $post->duration = request('duration');
        $post->detail = request('detail');
        $post->company_id = Auth::id();
        
        $post->save();

 
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
        return view('Frontend.post_detail',compact('posts'));
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
