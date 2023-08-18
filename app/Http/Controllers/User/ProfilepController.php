<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use Alert;

class ProfilepController extends Controller
{
    public function index()
    {
        $customer = Customer::where('id', auth('customer')->id())->first();

        return view('user.profilep.index', compact('customer'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$customer = Customer::where('id', auth('customer')->id())->first();
    	$customer->name = $request->name;
    	$customer->email = $request->email;
    	$customer->nohp = $request->nohp;
    	$customer->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$customer->password = Hash::make($request->password);
    	}
    	
    	$customer->update();

    	Alert::success('Profile Sukses diupdate', 'Success');
    	return redirect('profilep');
    }
}