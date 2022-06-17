<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=Categories::all();
        return view("guest.index",['data'=>$data]);

    }
    public function aboutUs(){
        return view("guest.about-us");
    }
    public function category()
    {
         $data=Categories::all();
        return view("guest.allcategory",['data'=>$data]);
    }

    public function contactus()
    {

        return view("guest.contactus");
    }
    public function category_detail($id)
    {
        return view("guest.category-detail",['data'=>Service::where('id',$id)->first()]);
    }

    public function sub_category($id)
    {

        return view("guest.sub-category",['data'=>Service::where('categories_id',$id)->get()]);
    }

}
