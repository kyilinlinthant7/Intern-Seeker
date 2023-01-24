<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_Type;
use App\Post;
use App\Company;
use Illuminate\Support\Facades\DB;


class Frontend_Controller extends Controller
{
    // public function __construct($value='')
    // {
    //     $types = Company_Type::all();
    //     return view('Frontend.frontend_template',compact('types'));

    // }
    public function index($value='')
    {
        // $posts = DB::table('posts')
        //         ->offset(10)
        //         ->limit(5)
        //         ->get();
        $posts = Post::all();

    	return view('Frontend.index',compact('posts'));
    }

    public function applicant_list($value='')
    {
    	return view('Frontend.applicant_list');
    }

    public function template($value='')
    {   
    	return view('Frontend.frontend_template');
    }

    public function notice_board($value='')
    {
        return view('Frontend.notice_board');
    }

    public function intern_field($value='')
    {
        return view('Frontend.intern_field');

    }

     public function intern_field_edit($value='')
    {
        $posts = Post::all();
        $company = Company::all();
        return view('Frontend.intern_field_edit',compact('posts','company'));

    }

    public function about($value='')
    {
        return view('Frontend.about');

    }

    public function contact($value='')
    {
        return view('Frontend.contact');

    }

     public function apply($value='')
    {
        return view('Frontend.apply');

    }

    public function student_register($value='')
    {
        return view('Frontend.student_register');
    }

    public function company_register($value='')
    {
        return view('Frontend.company_register');
    }

    public function post($value='')
    {
        return view('Frontend.post');
    }

    public function post_detail($value='')
    {
        return view('Frontend.post_detail');
    }

}
