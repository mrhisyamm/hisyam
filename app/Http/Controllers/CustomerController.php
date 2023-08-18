<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('customer.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $model = Customer::query()->where('email', $request->get('email'))->first();

        if(!Hash::check($request->get('password'), $model->password)){
            return back()->with('error', 'Email or Password is incorrect');
        }

        Auth::guard('customer')->login($model);

        return redirect()->route('user.slide_show.index')->with('succes', 'Welcome'. $model->name . '!');
        
        
    }

    public function logout(){
        Auth::guard('customer')->logout();

        return view('customer.login');
    }


    public function index()
    {
        return view('customer.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:customer',
            'password' => 'required|min:8|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        Customer::create($validatedData);

        return redirect('customer/login');
    }

}
