<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_Type;
use App\User;



class Company_Controller extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $types = Company_Type::all();
        return view('Frontend.company_register',compact('types'));
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
            "email" => 'required|max:100',
            "password" => 'required|min:8',
            "type" => 'required',
            "phone" => 'required',
            "ceo_name" => 'required',
            "hr_manager" => 'required',
            "address" => 'required',
            "description" => 'required',
            "website" => 'required',
            "profile" => 'required|mimes:jpeg,bmp,png',
        ]);

        if($request->hasfile("profile")){

            $profile = $request->file('profile');
            $upload_dir = public_path().'/storage/image/';
            $name = time().'.'.$profile->getClientOriginalExtension();
            $profile -> move($upload_dir, $name);
            $path = '/storage/image/'.$name;

        }
        else{
             $path = '';
        }


        $users = new User;
        $users->name = request('name');
        $users->email = request('email');
        $users->password = request('password');

        // $users->password = Hash::make('{{$password}}');

        $users->save();
        $users->assignRole('Company');


        $company = new Company;

        $company->user_id = $users->id;
        $company->type_id = request('type');
        $company->company_name = request('name');

        $company->phone = request('phone');
        $company->ceo_name = request('ceo_name');
        $company->hr_manager = request('hr_manager');
        $company->address = request('address');
        $company->description = request('description');
        $company->website = request('website');
        $company->profile = $path;

        $company->save();

 
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
