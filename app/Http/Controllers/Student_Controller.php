<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

class Student_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend.student_register');

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
            "name" => 'required|max:100',
            "dob" => 'required',
            "email" => 'required',
            "password" => 'required',
            "phone" => 'required',
            "gender" => 'required',
            "address" => 'required',
            "education" => 'required',
            "university" => 'required',
        ]);

        $users = new User;
        $users->name = request('name');
        $users->email = request('email');
        $users->password = request('password');

        // $users->password = Hash::make('{{$password}}');

        $users->save();
        $users->assignRole('Student');


        $stu = new Student;

        $stu->user_id = $users->id;
        $stu->name = request('name');
        $stu->dob = request('dob');
        $stu->phone = request('phone');
        $stu->gender = request('gender');
        $stu->address = request('address');
        $stu->education = request('education');
        $stu->university = request('university');

        $stu->save();

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
