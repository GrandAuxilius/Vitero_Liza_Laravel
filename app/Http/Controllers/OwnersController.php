<?php

namespace app\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Owners;


class OwnersController extends Controller
{
    public function clients(){
        $clients = Owners::all();
        
        return view('clients', compact('clients'));
    }

    public function addClient(Request $request){
        $clients = Owners::all();
        $clientData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mi' => 'required',
            'address' => 'required',
            'contact' => 'required',
            // 'meterReader' => 'required',
        ]);


        Owners::create($clientData);
        return view('clients', compact('clients'));
    }

    public function updateClient(Request $request, $id){
        $clients = Owners::all();
        
        if (request()->has('edit')) {
            $fname = $request->input('fname');
            $lname = $request->input('lname');
            $mi = $request->input('mi');
            $address = $request->input('address');
            $contact = $request->input('contact');
        
            Owners::where('id', $id)
                ->update([
                    'fname' => $fname,
                    'lname' => $lname,
                    'mi' => $mi,
                    'address' => $address,
                    'contact' => $contact
        ]);
        return Redirect::to('clients')
        ->with(compact('clients'));
        
    }
    return view('clients', compact( 'clients'));
}

    public function deleteClient($id)
    {
        Owners::where('id', $id)
            ->delete();
        return Redirect::to('clients');
    }
}
