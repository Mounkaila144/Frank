<?php

namespace App\Http\Controllers;


use App\Models\Avi;
use App\Models\Bill;
use App\Models\Categories;
use App\Models\Checkout;
use App\Models\Client;
use App\Models\DeliveryForm;
use App\Models\Order;
use App\Models\Service;
use App\Models\Reservation;
use App\Models\Unpaid;
use App\Models\UnpaidCheckout;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;



class ClientDashboardController extends Controller
{


  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/




    public function my_categories(){


        $data=Categories::all();
        return view('client.mycategories',['data'=>$data]);
}

    public function my_servicesdetails($id){

        $data=Service::where('id',$id)->first();
        $avis=Avi::all();
        return view('client.categorydetail',
            [
                'data'=>$data,
                'id'=>$data['id'],
                'avis'=>$avis
            ]);

    }

    public function index(Request $request)
    {
        $data=Categories::all();
        return view('client.mycategories',['data'=>$data]);

    }

    public function profile(){

        return view('client.profile');

    }
    public function my_services($id){

        return view('client.myservices2',['data'=>Service::where('categories_id',$id)->get()]);


    }
    public function my_bookings(){
        $data=Reservation::all();
        $data1=Service::all();
        return view('client.mybookings',['data'=>$data]);

    }



    public function update_identity(){
        return view('client.update-identity');

    }
    public function comment(Request $request,int$id)
    {
        $user=auth()->user();
        $avi=new Avi;
        $avi->services_id=$id;
        $avi->users_id=$user->getAuthIdentifier();
        $avi->commentaire=$request->input('description');
        $avi->note=$request->input('note');

        $avi->save();
        return redirect()->back();
    }


}

