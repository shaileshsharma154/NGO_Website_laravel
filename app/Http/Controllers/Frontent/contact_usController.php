<?php

namespace App\Http\Controllers\Frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\enquiry_detail;

class contact_usController extends Controller
{
    public function index(){
        return view('Frontent.contact_us');    
    }

    public function submitData(Request $req){
       //return "submit data";
       //print_r($req->all());
       //die();
       
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_id' => 'required',
            'mobile_number' => 'required',
            'message' => 'required'

        ]);


       $contact_us= new enquiry_detail; // model name not casesensetive Enquiry_detail enquiry_detail
       $contact_us->first_name= $req['first_name']; 
       $contact_us->last_name= $req['last_name'];
       $contact_us->email_id= $req['email_id'];
       $contact_us->mobile_number= $req['mobile_number'];
       $contact_us->message= $req['message'];
       $contact_us->save();
       return redirect('contact_us')->with('msg','Data inserted successfully');

    }
}
