<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Package::all();
        $user = Auth::user();
        $subscription = Subscription::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.subscription', compact('plans', 'user', 'subscription'));
    }

   public function store(Request $request)
    {
        $user = Auth::user();
        $package = Package::findOrFail($request->plan_id);

        // Validate the amount within the min/max package limit
        if ($request->amount < $package->min_amount || $request->amount > $package->max_amount) {
            return redirect()->back()->with('error', 'Enter an amount within Min/Max Plan amount');
        }

        // Check if the user has sufficient balance
        if ($request->amount > $user->balance) {
            return redirect()->back()->with('error', 'Insufficient balance');
        }

        Subscription::updateOrCreate(
            [
                'user_id' => $user->id,
                'package_id' => $package->id
            ],
            [
                'amount' => $request->amount,
                'status' => 1
            ]
        );

        $user->update([
            'balance' => $user->balance - $request->amount,
            'trader' => 1,
            'package_id' => $request->plan_id,
            'trade_count' => $user->trade_count + $request->trade_limit_per_day,
        ]);

        return redirect()->back()->with('success', 'Subscription Activated Successfully');
    }


}
