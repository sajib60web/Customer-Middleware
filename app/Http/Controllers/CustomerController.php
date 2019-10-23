<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Notifications\CustomerRecoverPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function showLoginForm()
    {
        return view('customer.login');
    }

    public function customerRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();
        $customer->save();
        session()->flash('message', 'Customer Registration successfully!');
        session()->flash('type', 'success');
        return redirect()->route('customer.login.show');
    }

    public function Login(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('customer_id', $customer->id);
                Session::put('customer_name', $customer->name);
                session()->flash('message', 'Customer login!');
                session()->flash('type', 'success');
                return redirect('/');
            } else {
                session()->flash('message', 'Password dose not match');
                session()->flash('type', 'danger');
                return redirect()->route('customer.login.show');
            }
        } else {
            session()->flash('message', 'E-mail dose not match');
            session()->flash('type', 'danger');
            return redirect()->route('customer.login.show');
        }
    }

    public function customerPasswordReset()
    {
        return view('customer.customer-password-reset');
    }

    public function customerPasswordResetSand(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $customer = Customer::where('email', $request->email)->first();
        $customer->email_verified_token = csrf_token();
        $customer->save();
        $customer->notify(new CustomerRecoverPassword($customer));
        session()->flash('message', 'We have e-mailed your password reset link!');
        session()->flash('type', 'success');
        return redirect()->back();
    }

    public function customerNewPassword($email_verified_token)
    {
        return view('customer.customer-new-password');
    }

    public function customerPasswordResetNew(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8|confirmed',

        ]);

        $customer = Customer::where('email_verified_token', $request->_token)->first();
        if (!$customer->email_verified_token == null) {
            $customer->password = Hash::make($request['password']);
            $customer->email_verified_token = null;
            $customer->save();
            session()->flash('message', 'Please your account login!');
            session()->flash('type', 'success');
            return redirect()->route('customer.login.show');
        } else {
            session()->flash('message', 'Your token is invalid!');
            session()->flash('type', 'danger');
            return redirect()->back();
        }
    }

    public function customerLogout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        session()->flash('message', 'Customer logout successfully!');
        session()->flash('type', 'success');
        return redirect()->route('customer.login.show');
    }
}
