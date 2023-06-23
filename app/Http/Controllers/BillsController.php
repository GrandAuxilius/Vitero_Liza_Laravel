<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owners;

class BillsController extends Controller
{
    public function clients(){
        $clients = Owners::all();
        
        return view('billing', compact('clients'));
    }

    public function addbill($id){
        // $clients = Owners::all();
        
        return view('addbill');
    }
    
    public function viewpayment(){
        return view('viewpayment');
    }
    
    public function viewbill(){
        return view('viewbill');
    }

}