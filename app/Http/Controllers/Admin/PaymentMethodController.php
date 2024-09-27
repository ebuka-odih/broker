<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Faker\Provider\Payment;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
   public function index()
   {
        $payment_method = PaymentMethod::all();
        return view('admin.payment-method', compact('payment_method'));
   }

   public function store(Request $request)
   {
       $validated = $request->validate([
           'wallet' => 'required',
           'address' => 'required',
       ]);
       $wallet = new PaymentMethod();
       $wallet->wallet = $validated['wallet'];
       $wallet->address = $validated['address'];
       $wallet->save();
       return redirect()->back()->with('success', 'Payment Method Added');
   }

   public function update(Request $request, $id)
   {
       $wallet = PaymentMethod::findOrFail($id);
       $wallet->wallet = $request->wallet;
       $wallet->address = $request->address;
       $wallet->save();
       return redirect()->back()->with('success', 'Payment Method Updated');
   }

   public function destroy($id)
   {
       $wallet = PaymentMethod::findOrFail($id);
       $wallet->delete();
       return redirect()->back()->with('success', 'Payment Method Deleted');
   }
}
