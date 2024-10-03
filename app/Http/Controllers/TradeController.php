<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Trade;
use App\Models\TradePair;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function trade($id)
    {
        $pairs = TradePair::all();
        $trade_pair = TradePair::findOrFail($id);
        $user = Auth::user();
        $trades = Trade::whereUserId(auth()->id())->latest()->get();
        return view('dashboard.trade.trade', compact('pairs', 'trade_pair', 'user', 'trades'));

    }

    public function placeTrade(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'leverage' => 'required',
            'duration' => 'required',
            'trade_pair_id' => 'required',
        ]);
        $user = Auth::user();
        $subscription = Subscription::whereUserId(auth()->id())->latest()->first();

//        if (now()->greaterThanOrEqualTo($user->package->duration)) {
//            return redirect()->back()->with('error', 'Your package duration has ended. Please renew your subscription to continue trading.');
//        }

        $tradesToday = Trade::where('user_id', $user->id)
            ->whereDate('created_at', now()->toDateString())
            ->count();

        if ($tradesToday >= $subscription->package->trade_limit_per_day) {
            return redirect()->back()->with('error', 'Sorry, You have reached your daily trade limit.');
        }
        if ($user->trader == 0)
        {
            return redirect()->back()->with('error', 'To initiate a trade, please subscribe to a package first.');
        }
        if ($request->amount <= \auth()->user()->balance){
            $trade = new Trade();
            $trade->amount = $validated['amount'];
            $trade->leverage = $validated['leverage'];
            $trade->duration = $validated['duration'];
            $trade->trade_pair_id = $validated['trade_pair_id'];
            $trade->action_type = $request->get("action_type");
            $trade->user_id = Auth::id();
            $trade->save();

            $user->balance -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', 'Trade Order Placed');
        }
        return redirect()->back()->with('error', 'Insufficient Balance');
    }

    public function closeTrade($id)
    {
        $trade = Trade::findOrFail($id);
        $trade->status = "closed";
        $trade->save();
        return redirect()->back()->with('success', 'Trade Closed Successfully');
    }


    public function checkTradeDuration()
    {
        dd("hello");
        $openTrades = Trade::where('status', 'open')->get();

        foreach ($openTrades as $trade) {
            $tradeOpenedAt = Carbon::parse($trade->created_at);
            $tradeDuration = $trade->duration;

            if (now()->diffInMinutes($tradeOpenedAt) >= $tradeDuration) {
                $trade->status = 'closed';
                $trade->save();
            }
        }

    }
}
